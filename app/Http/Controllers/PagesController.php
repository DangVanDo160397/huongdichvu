<?php

namespace App\Http\Controllers;

use App\TblParent;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Product;
use App\Expert;
use App\User;
use App\GopY;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class PagesController extends Controller
{
    function __construct()
    {
    	View::share('article',Article::all());
        if(Auth::check()) {
            View::share('nguoidung',Auth::user());
        }
    }
    public function index()
    {
        $product = DB::table('tblproduct')
                ->limit(4)
                ->get();
        $article_mypham = DB::table('tblarticle')->where('article_parent_id', '=', 1)->limit(6)->get();
        // var_dump($article_mypham);
        // die();
        $article_thoitrang = DB::table('tblarticle')->where('article_parent_id', '=', 2)->limit(6)->get();
    	return view('pages.index',compact('product','article_mypham','article_thoitrang'));
    }
    public  function getMyPham() {
        $product = Product::orderBy('product_id','Asc')->paginate(6);
        return view('pages.mypham',compact('product'));
    }
    public  function getThoiTrang() {
        $product = Product::all();
        return view('pages.thoitrang',compact('product'));
    }
    public  function getTintuc() {
        return view('pages.tintuvan');
    }
    public function tintuc($id) {
        $article = Article::find($id);
       return view('pages/tintuc',compact('article'));

    }
    public function mypham($id) {
        $product = Product::find($id);
        return view('pages/hienthimp',compact('product'));
    }

    public function getDangNhap(){
        return view('pages.dangnhap');
    }
    public function postDangnhap(Request $request) {
        $this->validate($request,[
            'user_email'=> 'required|email',
            'user_password' => 'required'
        ],[
            'user_email.required' => 'Email không được để trống.',
            'user_email.email' => 'Không đúng định dạng email.',
            'user_password.required' => 'Mật khẩu không được để trống.'
        ]);
        $email = $request->user_email;
        $password = $request->user_password;
        if(Auth::attempt(['user_email' => $email, 'password' => $password]))
        {
            return redirect()->route('pages.trangchu');
            View::share('user',Auth::user());
        }
        else
        {
            session()->flash('error','Sai tài khoản hoặc mật khẩu');
            return back();
        }
    }
    public function getThongTin(){
        return view('pages.thongtinnguoidung');
    }
    public function doiMatKhau(){
        return view('pages.doimatkhau');
    }

    public function postMatKhau(Request $request,User $user){
        $this->validate($request,[
            "password" => "required|min:3|max:32",
            "passwordAgain" => "required|same:password",
        ],[
            "password.required" => "Bạn chưa nhập mật khẩu.",
            "password.min" => "Password không được nhập ít hơn 3 ký tự.",
            "password.max" => "Mật khẩu không được nhập tối đa 32 ký tự.",
            "passwordAgain.required" => "Bạn chưa nhập lại mật khẩu.",
            "passwordAgain.same" => "Nhập lại mật khẩu không đúng."
        ]);
        $hash_password = Hash::make($request->password);
        $user_id = $user->user_id;
        DB::table('tbluser')
            ->where('user_id', $user_id)
            ->update(['user_password' => $hash_password]);
        Auth::logout();
        return redirect()->route('pages.trangchu');
    }
    public function getDangBai(){
       $product = Product::all();
        $parent = TblParent::all();
        return view('pages.dangbai',compact('product','parent'));
    }
    public function postDangBai(ArticleRequest $request)
    {
        $this->validate($request,[
            'article_title' => 'required|unique:tblarticle,article_title|min:3|max:30',
            'article_content' => 'required|min:3',
            'article_description' => 'required|min:3|max:200',
        ],[
            'article_title.required' => 'Tiêu đề không được để trống.',
            'article_title.unique' => 'Tiêu đề đã tồn tại.',
            'article_title.min' => 'Tiêu đề không ít hơn 3 kí tự.',
            'article_title.max' => 'Tiêu đề không được quá 30 ký tự.',
            'article_content.required' => 'Nội Dung không được để trống.',
            'article_content.min' => 'Nội dung không ít hơn 3 kí tự.',
            'article_description.required' => 'Mô tả không được để trống.',
            'article_description.max' => 'Mô tả không được quá 200 ký tự để trống.',
        ]);
        $article = new Article();
        $article->fill($request->all());
        $article->article_slug_name  = changeTitle($request->article_title);
        if($request->hasFile("article_image"))
        {
            $file = $request->file('article_image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'JPG'  && $duoi != 'png' && $duoi != 'PNG' && $duoi != "jpeg" && $duoi != "JPEG")
            {
                return redirect()->route('pages.getdangbai')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while (file_exists("upload/article".$Hinh)) {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/article",$Hinh);
            $article->article_image = $Hinh;
        }
        else {
            $article->article_image = "";
        }
        $article->save();
        return redirect()->route('pages.getdangbai')->with('thongbao','Thêm thành công.');
    }


    public function getDangXuat(){
        Auth::logout();
        return redirect()->route('pages.trangchu');
    }

    public function getGopY(){
       return view('pages.gopy');
    }

    public function postGopY(Request $request){
       $gopy = GopY::create($request->all());
       return redirect()->route('pages.getgopy')->with('thongbao','Cảm ơn bạn đã góp ý cho chúng tôi.');
    }
}
