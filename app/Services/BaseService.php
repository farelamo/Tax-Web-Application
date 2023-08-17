<?php

namespace App\Services;

use App\Traits\UploadFile;

class BaseService {

    use UploadFile;

    public function oops($message)  {
        return redirect()->back()->with($message);
    }
}