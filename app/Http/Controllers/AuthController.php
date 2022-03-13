<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\AuthServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public $authService;
    public function __construct(AuthServices $authService)
    {
        $this->authService = $authService;
    }

    public function showFormLogin()
    {
      return view('backend.auth.login');
    }

    public function login(Request $request)
    {

        if ($this->authService->login($request)){
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
        $this->authService->create($request);
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
