<?php

namespace App\Services;

use Exception;

class DashboardService extends BaseService
{
    public function index() {
        try {
            $title      = 'Admin | Dashboard';
            return view('admin.dashboard', compact('title'));
        }catch(Exception $e){
            return $this->oops('Oops, Terjadi Kesalahan');
        }
    }
}
