@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
<h1>"Formulario para crear nuevos CURSOS Y TALLERES"</h1>

<form action="{{route('cursos.store')}}" method="POST">

@csrf

    <label>
        Nombre <br>
        <input type="text" name="nombre">
    </label>
    @error('nombre')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>

    <label>
        Categoría <br>
        <input type="text" name="categoria">
    </label>
    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>

    <label>
        Descrición <br>
        <textarea name="descripcion" rows="10"></textarea>
    </label>
    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>

    <button title="submit">Enviar</button>

</form>
@endsection
