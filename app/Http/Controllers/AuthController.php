<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(AuthService $service) {
        $this->service = $service;
    }
}
