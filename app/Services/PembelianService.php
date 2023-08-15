<?php

namespace App\Services;

use Exception;
use App\Models\Pembelian;
use App\Http\Requests\PembelianRequest;

class PembelianService extends BaseService
{
    public function index() {
        try {
            $title      = 'Admin | Data Pembelian';
            $pembelian  = Pembelian::paginate(5);
            return view('admin.pembelian.index', compact('pembelian', 'title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function create() {
        try {
            $title = 'Admin | Buat Data Pembelian';
            return view('admin.pembelian.create', compact('title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function store(PembelianRequest $request) {
        try {
            $request['no_tax'] = 'INV/' . rand(1, 999) . '/' . rand(1, 999);
            Pembelian::create($request->except('_token'));

            return redirect()->route('pembelian.index');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function edit($data) {
        try {
            $title = 'Admin | Edit Data Pembelian';
            return view('admin.pembelian.edit', compact('data', 'title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function update($data, PembelianRequest $request) {
        try {
            $data->update($request->except('_token'));
            return redirect()->route('pembelian.index');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function delete($data) {
        try {
            $data->delete();
            return redirect()->route('pembelian.index');
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}