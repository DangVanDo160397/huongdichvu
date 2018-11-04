<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
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
            return redirect()->route('admin.index');
            View::share('user',Auth::user());
        }
        else
        {
            session()->flash('error','Sai tài khoản hoặc mật khẩu');
            return back();
        }
    }
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('admin.login');
    }
}
