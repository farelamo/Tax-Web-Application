<?php

namespace App\Services;

use Exception;
use App\Models\Penjualan;
use App\Http\Requests\PenjualanRequest;

class PenjualanService extends BaseService
{
    public function index() {
        try {
            $title      = 'Admin | Data Penjualan';
            $penjualans = Penjualan::paginate(5);

            return view('admin.Penjualan.index', compact('penjualans', 'title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function create() {
        try {
            $title = 'Admin | Buat Data Penjualan';
            return view('admin.Penjualan.create', compact('title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function store(PenjualanRequest $request) {
        try {
            $request['no_tax'] = 'INV/' . rand(1,999) .'/'. rand(1,999);
            Penjualan::create($request->except('_token'));

            return redirect()->route('penjualan.index');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function edit($data) {
        try {
            $title = 'Admin | Edit Data Penjualan';
            return view('admin.Penjualan.edit', compact('data', 'title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function update($data, PenjualanRequest $request) {
        try {
            $data->update($request->except('_token'));
            return redirect()->route('penjualan.index');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function delete($data) {
        try {
            $data->delete();
            return redirect()->route('penjualan.index');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}