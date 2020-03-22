@extends ('layout')

@section('content')
        <h1>{{ $title }}</h1>
        <hr>
        <form>
          <legend>FORM PARA NUEVO USUARIO</legend>
          <label>NAME: </label>
          <input type='text' name='name' placeholder='your name'>
        </form>
@endsection
