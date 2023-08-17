<?php

namespace App\Services;

use Exception;
use App\Models\Biodata;
use App\Http\Requests\BiodataRequest;

class BiodataService extends BaseService
{
    public function create() {
        try {
            $title = 'Admin | Biodata';
            return view('admin.verification.biodata', compact('title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function store(BiodataRequest $request) {
        try {
            $request['user_id'] = auth()->user()->id;
            Biodata::create($request->except('_token'));

            return redirect()->route('active');
        }catch(Exception $e){
            dd($e->getMessage());
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}