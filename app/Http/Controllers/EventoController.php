<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;
use DB;

class EventoController extends Controller
{
    public function index(){
        $events = Evento::with('tipo_evento')->paginate();
        return view('panel.event.index',['events' => $events]);
    }

    public function create(){
        return view('panel.event.create');
    }

    public function edit($id){
        $event = Evento::with('tipo_evento')->find($id);
        return view('panel.event.edit',['event' => $event]);
    }

    public function store(Request $request){
        try{
             DB::transaction(function () use ($request) {
                Evento::create($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('events.index');
    }

    public function update(Request $request, $id){
        try{
             DB::transaction(function () use ($request,$id) {
                $event = Evento::find($id);
                $event->update($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('events.index');
    }

    public function destroy($id){
        try{
            DB::transaction(function () use ($id) {
               $event = Evento::find($id);
               $event->delete();
           });
           toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
       }catch(Exception $e){
           toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
       }
       return redirect()->route('events.index');
    }

    public function searchByName(Request $request){
        if(!isset($request->name)) return [];
        return Evento::where('nome','like',"%{$request->name}%")->get();
    }


}
