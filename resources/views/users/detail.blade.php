@extends('layout')
@section ('title', "Usuarios {$id}")
@section('content')
  <h1>{{ $title }} : {{$id}}</h1>
  <hr>
  @if(!empty($id))
    <ul>
      <li>{{ $id}}</li>
    </ul>
  @else
    <p>NO HAY REGISTROS PARA ESTE USUARIO</p>
  @endif

@endsection

@section('sidebar')
  @parent
  <p>Otra barra lateral</p>
@endsection
