@extends ('layout')

@section ('title', "Usuarios")

@section('content')
        <h1>{{ $title }}</h1>
        <hr>
        @if(!empty($usuarios))
          <ul>
          @foreach ($usuarios as $usuario)
            <li>{{ $usuario }}</li>
          @endforeach
          </ul>
        @else
          <p>NO HAY REGISTROS</p>
        @endif

@endsection

@section('sidebar')
  @parent
  <h3>BARRA LATERAL PERSONALIZADA</h3>
@endsection
