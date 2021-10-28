<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use Redirect;

class ProfessorController extends Controller
{
    public function index(){
        $professores = Professor::get();

        return view('professores.list',['professores'=> $professores]);
    }

    public function show($id){
        $professores = Professor::findOrFail($id);
        return view('professores.show', ['professores' => $professores]);

    }
    public function new(){
        return view('professores.form');
    }
    public function add(Request $request){

        $professores = new Professor;
        $professores = $professores::create($request->all());
        return Redirect::to('/professores');

    }

    public function edit($id){

        $professores = Professor::findOrFail($id);
        return view('professores.form', ['professores' => $professores]);
    }
    public function update($id ,Request $request){

        $professores = Professor::findOrFail($id);
        $professores->update($request->all());
        return Redirect::to('/professores');
    }

    public function delete($id){
        $professores = Professor::findOrFail($id);
        $professores->delete();
        return Redirect::to('/professores');
    }
}
