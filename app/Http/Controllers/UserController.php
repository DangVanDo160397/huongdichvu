<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->user_password = Hash::make($user->user_password);
        if($request->hasFile("user_image"))
        {
            $file = $request->file('user_image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != "jpeg" )
            {
                return redirect()->route('user.create')->with('loi','Bạn chỉ được nhập file ảnh có đuôi png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_". $name;
            while (file_exists("upload/user".$Hinh)) {
                $Hinh = str_random(4)."_". $name;
            }
            $file->move("upload/user",$Hinh);
            $user->user_image = $Hinh;
        }
        else {
            $user->user_image = "";
        }
        $user->save();
        return redirect()->route('user.show',$user)->with('thongbao','Thêm thành công.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'user_name' => 'required|min:3|max:30',
            'user_email' => 'required|email',
            'user_address' => 'required|min:3',
            'user_gender' => 'required',
            'user_phone' => 'required|min:3',
            'user_age' => 'required',
        ],[
            'user_name.required' => 'Username không được để trống.',
            'user_name.min' => 'Username không ít hơn 3 kí tự.',
            'user_name.max' => 'Username không lớn hơn 30 ký tự',
            'user_email.required' => 'Email không được để trống.',
            'user_email.email' => 'Email không ít hơn 3 kí tự.',
            'user_address.required' => 'Địa chỉ không được để trống.',
            'user_address.min' => 'Địa chỉ không ít hơn 3 kí tự.',
            'user_gender.required' => 'Giới tính không được để trống.',
            'user_phone.required' => 'Số điện thoại không được để trống.',
            'user_phone.min' => 'Số điện thoại không ít hơn 3 kí tự.',
            'user_age.required' => 'Tuổi không được để trống.',
        ]);
        if($request->changePassword == "on") {
            $this->validate($request,[
                "user_password" => "required|min:3|max:32",
                "user_passwordAgain" => "required|same:user_password",
            ],[
                "user_password.required" => "Bạn chưa nhập mật khẩu.",
                "user_password.min" => "Password không được nhập ít hơn 3 ký tự.",
                "user_password.max" => "Mật khẩu không được nhập tối đa 32 ký tự.",
                "user_passwordAgain.required" => "Bạn chưa nhập lại mật khẩu.",
                "user_passwordAgain.same" => "Nhập lại mật khẩu không đúng."
            ]);
        }
        $user->fill($request->all());
        $user->user_password = Hash::make($request->user_password);
        $user->save();
        return redirect()->route('user.show',$user)->with('thongbao','Sửa thành công.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('destroy_success');
        return redirect()->route('user.index')->with('thongbao','Xóa thành công.');
    }
}
