<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Util\UploadFileUtil;
use DB;

class MaterialController extends Controller
{

    private $path = "material";

    public function index(){
        $materials = Material::paginate();
        return view('panel.material.index',['materials' => $materials]);
    }

    public function create(){
        return view('panel.material.create');
    }

    public function edit($id){
        $material = Material::find($id);
        return view('panel.material.edit',['material' => $material]);
    }

    public function store(Request $request){
        $request->validate(["image"=>"required|file"]);
        try{
             DB::transaction(function () use ($request) {
                $data = UploadFileUtil::create($request,"image",$this->path);
                Material::create($data);
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('materials.index');
    }

    public function update(Request $request, $id){
        try{
             DB::transaction(function () use ($request,$id) {
                $data = $request->all();
                $material = Material::find($id);
                if(isset($request->image))
                    $data = UploadFileUtil::update($request,"image",$this->path,$material);
                $material->update($data);
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('materials.index');
    }

    public function destroy($id){
        try{
            DB::transaction(function () use ($id) {
               $material = Material::find($id);
               UploadFileUtil::deleteFile($material,"image");
               $material->delete();
           });
           toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
       }catch(Exception $e){
           toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
       }
       return redirect()->route('materials.index');
    }

    public function searchByName(Request $request){
        if(!isset($request->name)) return [];
        return Material::where('nome','like',"%{$request->name}%")->get();
    }

}
