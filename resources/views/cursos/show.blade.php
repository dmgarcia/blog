@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->nombre)

@section('content')
<h1>"Curso: {{$curso->nombre}}</h1>
<p><strong>"Categoría"</strong>{{$curso->categoria}}</p>
<p><strong>"Descripción"</strong>{{$curso->descripcion}}</p>
<a href="{{route('cursos.index')}}">Lista de Cursos</a>
<a href="{{route('cursos.edit', $curso->id)}}">Editar</a>
@endsection