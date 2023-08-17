<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Services\AuthService;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{
    public function __construct(AuthService $service) {
        $this->service = $service;
    }

    public function login(){
        try {
            return $this->service->login();
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function authLogin(LoginRequest $request){
        try {
            $data = User::where('email', $request->email)->first();
            if(!$data)
                return $this->oops('Oops, data tidak ditemukan');

            return $this->service->authLogin($request);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function register(){
        try {
            return $this->service->register();
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function authRegister(RegisterRequest $request){
        try {
            return $this->service->authRegister($request);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function logout(){
        try {
            return $this->service->logout();
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}
