<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoEvento;
use DB;

class TipoEventoController extends Controller
{
    public function index(){
        $typeEvents = TipoEvento::paginate();
        return view('panel.type_event.index',['typeEvents' => $typeEvents]);
    }

    public function create(){
        return view('panel.type_event.create');
    }

    public function edit($id){
        $typeEvent = TipoEvento::find($id);
        return view('panel.type_event.edit',['typeEvent' => $typeEvent]);
    }

    public function store(Request $request){
        try{
             DB::transaction(function () use ($request) {
                TipoEvento::create($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('type-events.index');
    }

    public function update(Request $request, $id){
        try{
             DB::transaction(function () use ($request,$id) {
                $tipoEvento = TipoEvento::find($id);
                $tipoEvento->update($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('type-events.index');
    }

    public function destroy($id){
        try{
            DB::transaction(function () use ($id) {
               $tipoEvento = TipoEvento::find($id);
               $tipoEvento->delete();
           });
           toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
       }catch(Exception $e){
           toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
       }
       return redirect()->route('type-events.index');
    }

    public function searchByName(Request $request){
        if(!isset($request->name)) return [];
        return TipoEvento::where('nome','like',"%{$request->name}%")->get();
    }


}
