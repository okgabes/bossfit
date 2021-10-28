<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modalidade;
use Redirect;

class ModalidadeController extends Controller
{
    public function index(){
        $modalidades = Modalidade::get();

        return view('modalidades.list',['modalidades'=> $modalidades]);
    }
    public function show($id){
        $modalidades = Modalidade::findOrFail($id);
        return view('modalidades.show', ['modalidades' => $modalidades]);

    }
    public function new(){
        return view('modalidades.form');
    }

    public function add(Request  $request){

        $modalidades = new Modalidade;
        $modalidades = $modalidades::create($request->all());
        return Redirect::to('/modalidades');

    }

    public function edit($id){

        $modalidades = Modalidade::findOrFail($id);
        return view('modalidades.form', ['modalidades' => $modalidades]);
    }

    public function update($id ,Request $request){

        $modalidades = Modalidade::findOrFail($id);
        $modalidades->update($request->all());
        return Redirect::to('/modalidades');
    }

    public function delete($id){
        $modalidades = Modalidade::findOrFail($id);
        $modalidades->delete();
        return Redirect::to('/modalidades');
    }
}
