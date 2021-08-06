@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<h1>"Pagina index de cursos"</h1>

<a href="{{route('cursos.create')}}">Crear Curso</a>

<ul>
    @foreach ($cursos as $curso)
        <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->nombre}}</a></li>
    @endforeach
</ul>
{{$cursos->links();}}
@endsection