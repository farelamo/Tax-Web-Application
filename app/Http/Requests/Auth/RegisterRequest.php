<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|max:8',
            'confirm_password'  => 'required|same:password',
            'role'              => 'required|in:PKP,AR'
        ];
    }
}
