<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        /*$curso = new Curso();
        
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save(); Lo puedo hacer como se muestra abajo */
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);
    }

    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit',compact('curso'));
    }

    public function update(StoreCurso $request, Curso $curso){

        $curso->update($request->all());
        return redirect()->route('cursos.show',$curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
