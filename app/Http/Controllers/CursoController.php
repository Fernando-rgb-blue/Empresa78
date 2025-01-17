<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index () {

        $curso = Curso::paginate(15);

        return view('cursos.index', compact('curso'));
    }

    public function create () { 
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', ['curso' => $curso]);
    }
}
