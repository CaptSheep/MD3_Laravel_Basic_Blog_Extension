<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\AuthRepository;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthServices extends BaseServices
{
    public $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository ;
    }

    public function login( $request)
    {
        $data = $request->only('email','password');
        if (Auth::attempt($data)){
            return true;
        }
        else{
            return  false;
        }
    }

    public function create($request)
    {
        $users = $request->only('name','email','password');
        $users['password'] = Hash::make($users['password']);
        $user = User::create($users);
        return $this->sendResponse($user,'Create Successful',201);
    }
}
