<?php

namespace App\Services;

use Exception;
use App\Models\Activation;
use Illuminate\Http\Request;
use App\Http\Requests\ActivationRequest;

class ActivationService extends BaseService
{
    public function create() {
        try {
            $title = 'Admin | Aktivasi Akun';
            return view('admin.verification.activation', compact('title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function store(Request $request) {
        try {
            dd($request->file('ktp'));
            foreach ($variable as $key => $value) {
                # code...
            }

            Activation::create($request->except('_token'));
            return redirect()->route('dashboard');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}