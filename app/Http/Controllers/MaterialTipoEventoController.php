<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialTipoEvento;
use DB;


class MaterialTipoEventoController extends Controller
{
    public function index(){
        $materialTipoEventos = MaterialTipoEvento::with('tipo_evento','material')->paginate();
        return view('panel.material_type_event.index',['materialTipoEventos' => $materialTipoEventos]);
    }

    public function create(){
        return view('panel.material_type_event.create');
    }

    public function edit($id){
        $materialTipoEvento = MaterialTipoEvento::find($id);
        return view('panel.material_type_event.edit',['materialTipoEvento' => $materialTipoEvento]);
    }

    public function store(Request $request){
        try{
             DB::transaction(function () use ($request) {
                MaterialTipoEvento::create($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('material-type-events.index');
    }

    public function update(Request $request, $id){
        try{
             DB::transaction(function () use ($request,$id) {
                $materialTipoEvento = MaterialTipoEvento::find($id);
                $materialTipoEvento->update($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('material-type-events.index');
    }

    public function destroy($id){
        try{
            DB::transaction(function () use ($id) {
               $materialTipoEvento = MaterialTipoEvento::find($id);
               $materialTipoEvento->delete();
           });
           toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
       }catch(Exception $e){
           toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
       }
       return redirect()->route('material-type-events.index');
    }

}
