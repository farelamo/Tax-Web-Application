<?php

namespace App\Services;

use Exception;
use App\Models\User;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthService extends BaseService
{
    public function login(){
        try {
            $title = 'Login';
            return view('login', compact('title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function authLogin(LoginRequest $request){
        try {
            if(auth()->attempt([
                'email'    => $request->email,
                'password' => $request->password,
            ])){
                return redirect()->route('dashboard');
            }
            return $this->service->authLogin($request);
        }catch(Exception $e){
            dd($e->getMessage());
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function register(){
        try {
            $title = 'Register Account';
            return view('register', compact('title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function authRegister(RegisterRequest $request){
        try {
            $request['password'] = bcrypt($request->password);
            User::create($request->except('_token'));

            return redirect()->route('login');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function logout(){
        try {
            auth()->logout();
            return redirect()->route('login');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}