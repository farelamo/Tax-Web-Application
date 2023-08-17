<?php

namespace App\Traits;

trait UploadFile {
    public function uploadFile($directory, $file, $filename){
        Storage::disk('public')->putFileAs(`uploads/{$directory}`, $file, $filename);

        return "uploads/$directory/$filename";
    }
}

?>