<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
      return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $users = $request->only('email','password');
        if (Auth::attempt($users)){
            return redirect()->route('posts.index');
        }
        else
        {
          Session::flash('msg','Tài khoản hoặc mật khẩu sai');
          return redirect()->back();
        }
    }

    public function showFormRegister()
    {
        return view('backend.auth.register');
    }

    public function register(Request $request)
    {
        $users = $request->only('name','email','password');
        $users['password'] = Hash::make($users['password']);
        DB::table('users')->insert($users);
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
