<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluguer;
use DB;

class AluguerController extends Controller
{
    public function index(){
        $aluguers = Aluguer::paginate();
        return view('panel.aluguer.index',['aluguers' => $aluguers]);
    }

    public function create(){
        return view('panel.aluguer.create');
    }

    public function edit($id){
        $aluguer = Aluguer::find($id);
        return view('panel.aluguer.edit',['aluguer' => $aluguer]);
    }

    public function store(Request $request){
        try{
             DB::transaction(function () use ($request) {
                Aluguer::create($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('aluguers.index');
    }

    public function update(Request $request, $id){
        try{
             DB::transaction(function () use ($request,$id) {
                $aluguer = Aluguer::find($id);
                $aluguer->update($request->all());
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('aluguers.index');
    }

    public function destroy($id){
        try{
            DB::transaction(function () use ($id) {
               $aluguer = Aluguer::find($id);
               $aluguer->delete();
           });
           toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
       }catch(Exception $e){
           toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
       }
       return redirect()->route('aluguers.index');
    }
}
