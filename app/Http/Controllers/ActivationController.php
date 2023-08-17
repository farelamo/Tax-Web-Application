<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ActivationService;
use App\Http\Requests\Auth\LoginRequest;

class ActivationController extends Controller
{
    public function __construct(ActivationService $service) {
        $this->service = $service;
    }

    public function create() {
        try {
            return $this->service->create();
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function store(Request $request) {
        try {
            
            return $this->service->store($request);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}
