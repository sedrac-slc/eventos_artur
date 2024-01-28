<?php

namespace App\Util;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;

class UploadFileUtil{

    public static function create(Request $request, $fildName, $path){
        $data = $request->all();
        if (!$request->hasFile($fildName)) throw new Exception("Ficheiro em falta {$fildName}");
        $file =  $request->file($fildName);
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $fileExtension;
        $data[$fildName] = $file->storeAs($path, $fileName, 'public');
        return $data;
    }

    public static function deleteFile($obj, $fildName){
        if (isset($obj->$fildName) && Storage::exists($obj->$fildName))
            Storage::delete($obj->$fildName);
    }

    public static function update(Request $request, $fildName, $path, $obj){
        static::deleteFile($obj, $fildName);
        return static::create($request,$fildName,$path);
    }

}
