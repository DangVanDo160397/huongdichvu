<?php
// tạo ra controller có 7 hàm để chúng ta thực hiện
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Product;
use App\TblParent;
use App\Http\Requests\ArticleRequest;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lấy ra tất cả các bản ghi của 1 bảng
        $article= Article::all();
        return view('admin.article.index',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //lấy ra view tạo 1 bản ghi
        $product = Product::all();
        $parent = TblParent::all();
        return view('admin.article.add',compact('product','parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //lưu bản ghi vào cơ sở dữ liệu
        $article = new Article();
        $article->fill($request->all());
        $article->article_slug_name  = changeTitle($request->article_title);
        // if($request->hasFile("article_image"))
        // {
        //     $file = $request->file('article_image');
        //     $duoi = $file->getClientOriginalExtension();
        //     if($duoi != 'jpg' && $duoi != 'JPG'  && $duoi != 'png' && $duoi != 'PNG' && $duoi != "jpeg" && $duoi != "JPEG")
        //     {
        //         return redirect()->route('article.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
        //     }
        //     $name = $file->getClientOriginalName();
        //     $Hinh = str_random(4)."_". $name;
        //     while (file_exists("upload/article".$Hinh)) {
        //         $Hinh = str_random(4)."_". $name;
        //     }
        //     $file->move("upload/article",$Hinh);
        //     $article->article_image = $Hinh;
        // }
        // else {
        //     $article->article_image = "";
        // }
        $article->save();
        return redirect()->route('article.show',$article)->with('thongbao','Thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //lấy ra view để hiển thị 1 bản ghi
        return view('admin.article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //lấy ra view để sửa 1 bản ghi
        $product = Product::all();
        $parent = TblParent::all();
        return view('admin.article.edit',compact('article','product','parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //cap nhap bản ghi do
        $this->validate($request,[
            'article_title' => 'required|min:3|max:100',
            'article_content' => 'required|min:3',
            'article_description' => 'required|min:3|max:500',
        ],[
            'article_title.required' => 'Tiêu đề không được để trống.',
            'article_title.min' => 'Tiêu đề không ít hơn 3 kí tự.',
            'article_title.max' => 'Tiêu đề không được quá 100 ký tự.',
            'article_content.required' => 'Nội Dung không được để trống.',
            'article_content.min' => 'Nội dung không ít hơn 3 kí tự.',
            'article_description.required' => 'Mô tả không được để trống.',
            'article_description.max' => 'Mô tả không được quá 500 ký tự để trống.',
        ]);
        
        $article->fill($request->all());
        $article->article_slug_name = changeTitle($request->article_title);
        // if($request->hasFile("article_image"))
        // {
        //     $file = $request->file('article_image');
        //     $duoi = $file->getClientOriginalExtension();
        //     if($duoi != 'jpg' && $duoi != 'JPG'  && $duoi != 'png' && $duoi != 'PNG' && $duoi != "jpeg" && $duoi != "JPEG")
        //     {
        //         return redirect()->route('article.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
        //     }
        //     $name = $file->getClientOriginalName();
        //     $Hinh = str_random(4)."_". $name;
        //     while (file_exists("upload/article".$Hinh)) {
        //         $Hinh = str_random(4)."_". $name;
        //     }
        //     $file->move("upload/article",$Hinh);
        //     $article->article_image = $Hinh;
        // }
        $article->save();
        return redirect()->route('article.show',$article)->with('thongbao','Sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //xoa 1 bản ghi
        $article->delete();
        session()->flash('destroy_success');
        return redirect()->route('article.index')->with('thongbao','Xóa thành công.');
    }
}
