<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Services\PenjualanService;
use App\Http\Requests\PenjualanRequest;

class PenjualanController extends Controller
{
    public function __construct(PenjualanService $service) {
        $this->service = $service;
        $this->middleware('admin')->except('index');
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

    public function store(PenjualanRequest $request) {
        try {

            return $this->service->store($request);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function edit($id) {
        try {
            $data = Penjualan::where('id', $id)->first();
            if(!$data) return $this->oops('Maaf, Data Tidak Ditemukan'); 

            return $this->service->edit($data);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function update($id, PenjualanRequest $request) {
        try {
            $data = Penjualan::where('id', $id)->first();
            if(!$data) return $this->oops('Maaf, Data Tidak Ditemukan'); 

            return $this->service->update($data, $request);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function destroy($id) {
        try {
            $data = Penjualan::where('id', $id)->first();
            if(!$data) return $this->oops('Oops, Data Tidak Ditemukan'); 

            return $this->service->delete($data);
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}
