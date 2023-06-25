@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Facultades</h1>


@stop

@section('content')
    <p>Listado de Facultades</p>
    <a href="/facultades/form_registro">Adicionar facultad</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opcioners</th>
    </tr>
  </thead>
  <tbody>
    @php $c=1 @endphp
    @foreach($bdfacultades as $f)
    <tr>
      <th scope="row">{{$c}}</th>
      <td>{{$f->codFacultad}}</td>
      <td>{{$f->nomFacultad}}</td>
      <td>@mdo</td>
      <td>
        <a class="btn btn-primary">Editar</a>
        <a class="btn btn-danger" href="{{route('eliminaFac',$f->codFacultad)}}">Eliminar</a>
      </td>
    </tr>
    @php $c=$c+1 @endphp
    @endforeach
  </tbody>
</table>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
