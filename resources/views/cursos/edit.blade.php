@extends('layouts.plantilla')

@section('title', 'Editar')

@section('content')
<h1>"Formulario para editar CURSOS Y TALLERES"</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">

@csrf
@method('PUT')

    <label>
        Nombre <br>
        <input type="text" name="nombre" value="{{$curso->nombre}}">
    </label>
    <br>

    <label>
        Categoría <br>
        <input type="text" name="categoria" value="{{$curso->categoria}}"">
    </label>
    <br>

    <label>
        Descrición <br>
        <textarea name="descripcion" rows="10">{{$curso->descripcion}}</textarea>
    </label>
    <br>

    <button title="submit">Actualizar</button>

</form>
@endsection