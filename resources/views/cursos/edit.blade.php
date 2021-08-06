@extends('layouts.plantilla')

@section('title', 'Editar')

@section('content')
<h1>"Formulario para editar CURSOS Y TALLERES"</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">

@csrf
@method('PUT')

    <label>
        Nombre <br>
        <input type="text" name="nombre" value="{{old('nombre' , $curso->nombre)}}">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>

    <label>
        Categoría <br>
        <input type="text" name="categoria" value="{{old('categoria' , $curso->categoria)}}">
    </label>
    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>

    <label>
        Descrición <br>
        <textarea name="descripcion" rows="10">{{old('descripcion', $curso->descripcion)}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>

    <button title="submit">Actualizar</button>

</form>
@endsection