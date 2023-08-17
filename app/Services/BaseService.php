<?php

namespace App\Services;

class BaseService {

    public function oops($message)  {
        return redirect()->back()->with($message);
    }
}