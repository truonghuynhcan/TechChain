<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('page.login');
    }
    public function postLogin(Request $req){
        $req->only('email','password');
        $email = $req->input('email');
        $pass = $req->input('password');
        
        $user=User::where('email',$email)->first();
        $canLogin=false;
        if(isset($user)){
            $canLogin=Hash::check($pass,$user->password);
        }

        if ($canLogin) {//cho đăng nhập
            Auth::login($user);
            return redirect()->route('home');
        }else{
            $req->session()->put('message','Email hoặc mật khẩu không đúng!');
            return back();
        }
    }
    public function register(){
        return view('page.register');
    }

    public function postRegister(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $pass=$req->input('pass');
        $repass=$req->input('repass');

        if($pass!==$repass){
            Session()->put('message','Mật khẩu xác thực không trùng khớp!');
            return back();
        }
        $user=User::where('email',$email)->first();
        if(isset($user)){
            $req->session()->put('message','Email đã tồn tại!');
            // $req->session()->flash('message', 'Email đã tồn tại!');
            return back();
        }else{
            $user = new User();
            $user->name=$name;
            $user->email=$email;
            $user->password=$email;
            $user->save();
            Session()->pust('success','Đăng ký thành công. Hãy đăng nhập để kích hoạt!');
            return redirect()->route('login');
        }
    }
}
