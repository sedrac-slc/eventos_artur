<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Util\UploadFileUtil;

use Illuminate\Http\Request;
use Exception;
use DB;

class UserController extends Controller
{

    private $path = "user";

    public function index(){
        $users = User::paginate();
        return view('panel.user.index',['users' => $users]);
    }

    public function create(){
        return view('panel.user.create');
    }

    public function edit($id){
        $user = User::find($id);
        return view('panel.user.edit',['user' => $user]);
    }

    public function store(Request $request){
        $request->validate(['image' => 'required|file']);
        try{
            if($request->password != $request->confirm_password) throw new Exception("A senhas informadas são diferentes");
            DB::transaction(function () use ($request) {
                $data = $request->all();
                $data = UploadFileUtil::create($request,"image",$this->path);
                $data['password'] = bcrypt($data['password']);
                User::create($data);
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id){
        try{
            if(isset($request->password, $request->confirm_password) && $request->password != $request->confirm_password)
                throw new Exception("A senhas informadas são diferentes");
             DB::transaction(function () use ($request,$id) {
                $data = $request->all();
                $user = User::find($id);
                if(isset($request->password)) $data['password'] = bcrypt($data['password']);
                if(isset($request->image)) $data = UploadFileUtil::update($request,"image",$this->path,$user);
                $user->update($data);
            });
            toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
        }catch(Exception $e){
            toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
        }
        return redirect()->route('users.index');
    }

    public function destroy($id){
        try{
            DB::transaction(function () use ($id) {
               $user = User::find($id);
               UploadFileUtil::deleteFile($user,"image");
               $user->delete();
           });
           toastr()->closeOnHover(true)->closeDuration(10)->addSuccess('Operação realizada com successo');
       }catch(Exception $e){
           toastr()->closeOnHover(true)->closeDuration(10)->addError("Erro na operação: {$e->getMessage()}");
       }
       return redirect()->route('users.index');
    }

}
