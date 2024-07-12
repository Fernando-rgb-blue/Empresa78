@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a cursos</h1>

    <ul>
        @foreach ($curso as $cursos)
            <li>
                {{ $cursos->name }} 
            </li>
        @endforeach
    </ul>

    {{ $curso->links() }}
@endsection
