<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Professor;
use App\Models\Modalidade;

use Redirect;
use App\Http\Requests\StoreUserRequest;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();
        $professores = Professor::get();
        $modalidades = Modalidade::get();

        return view('usuarios.list',['usuarios'=> $usuarios, 'professores'=> $professores, 'modalidades'=> $modalidades]);
    }

    public function new(){
        $professores = Professor::get();
        $modalidades = Modalidade::get();
        return view('usuarios.form',['professores'=> $professores, 'modalidades'=> $modalidades]);
    }

    public function show($id){
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', ['usuario' => $usuario]);

    }

    public function add(StoreUserRequest  $request){

        $usuario = new Usuario;
        $usuario = $usuario::create($request->all());
        return Redirect::to('/usuarios');

    }

    public function edit($id){
        $professores = Professor::get();
        $modalidades = Modalidade::get();

        $usuario = Usuario::findOrFail($id);
        return view('usuarios.form', ['usuario' => $usuario, 'professores'=> $professores, 'modalidades'=> $modalidades]);
    }

    public function update($id ,StoreUserRequest $request){

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return Redirect::to('/usuarios');
    }

    public function delete($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return Redirect::to('/usuarios');
    }



}
