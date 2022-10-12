@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
<h1>Bienvenido a la seccion para crear un cursos</h1>

<form action="{{route('cursos.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
        
    <label>
        Descripcion:
        <br>
        <textarea name="description" rows="5">{{old('description')}}</textarea>
    </label>

    @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>

    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>
    
    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <button type="submit">Enviar formulario</button>
    <br>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
</form>
@endsection