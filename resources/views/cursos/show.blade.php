@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
<h1>Bienvenido al curso: {{$curso->name}}</h1>
<a href={{route('cursos.edit',$curso)}}>Editar curso</a>
<br>
<p><strong>Categoria: </strong>{{$curso->categoria}}</p>
<p>Descripcion: {{$curso->description}}</p>
<br>
<form action="{{route('cursos.destroy',$curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar curso</button>
</form>
<br>
<a href={{route('cursos.index')}}>Volver a cursos</a>
@endsection