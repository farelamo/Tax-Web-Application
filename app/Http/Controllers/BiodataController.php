<?php

namespace App\Http\Controllers;

use App\Services\BiodataService;
use App\Http\Requests\BiodataRequest;

class BiodataController extends Controller
{
    public function __construct(BiodataService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        try {
            return $this->service->create();
        } catch (Exception $e) {
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }

    public function store(BiodataRequest $request)
    {
        try {

            return $this->service->store($request);
        } catch (Exception $e) {
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}

