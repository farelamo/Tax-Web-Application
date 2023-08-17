<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DashboardService;

class DashboardController extends Controller
{
    public function __construct(DashboardService $service) {
        $this->service = $service;
    }

    public function index(){
        try {
            return $this->service->index();
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}
