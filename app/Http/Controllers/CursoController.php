<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequestCurso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::orderBy('id', 'DESC')->paginate();
        
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(StorePostRequestCurso $request){
       
        $curso = new Curso();

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        //$curso = Curso::create($request);

        return redirect()->route('cursos.show', $curso->id);
    }

    public function shoW($id){

        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
        
    }

    public function edit($id){
        $curso = Curso::find($id);
        return view('cursos.edit', compact('curso'));

    }

    public function update(StorePostRequestCurso $request, $id){

        $curso = Curso::find($id);

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save();
        
        return redirect()->route('cursos.show', $curso->id);

    }

    public function destroy($curso){
        $curso = Curso::find($curso);
        $curso->delete();
        return redirect()->route('cursos.index');
    }

    
}
