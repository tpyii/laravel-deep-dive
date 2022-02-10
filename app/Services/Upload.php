<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class Upload
{
    /**
     * 
     * @param $file
     * @param string $folder
     * @param string $storage
     * @return string
     */
    public function upload(UploadedFile $file, $folder, $storage): string
    {
        return $file->store($folder, $storage);
    }
}
