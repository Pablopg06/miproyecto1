@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
<h1>Bienvenido a la seccion para editar un cursos</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf

    @method('put')
    
    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name',$curso->name)}}">
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
        <textarea name="description" rows="5">{{old('description',$curso->description)}}</textarea>
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
        <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
    </label>

    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <button type="submit">Actualizar formulario</button>
    <br>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
</form>
@endsection