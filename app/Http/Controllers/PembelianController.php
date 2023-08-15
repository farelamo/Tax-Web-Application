<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Services\PembelianService;
use App\Http\Requests\PembelianRequest;

class PembelianController extends Controller
{
    public function __construct(PembelianService $service) {
        $this->service = $service;
    }

    public function index() {
        try {

            return $this->service->index();
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function create() {
        try {

            return $this->service->create();
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function store(PembelianRequest $request) {
        try {

            return $this->service->store($request);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function edit($id) {
        try {
            $data = Pembelian::where('id', $id)->first();
            if(!$data) return $this->oops('Maaf, Data Tidak Ditemukan'); 

            return $this->service->edit($data);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function update($id, PembelianRequest $request) {
        try {
            $data = Pembelian::where('id', $id)->first();
            if(!$data) return $this->oops('Maaf, Data Tidak Ditemukan'); 

            return $this->service->update($data, $request);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function destroy($id) {
        try {
            $data = Pembelian::where('id', $id)->first();
            if(!$data) return $this->oops('Oops, Data Tidak Ditemukan'); 

            return $this->service->delete($data);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}
