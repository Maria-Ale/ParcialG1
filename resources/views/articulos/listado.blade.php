@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Articulos</h1>
@stop

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Referencia</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Color</th>
      <th scope="col">Precio Unitario</th>
      <th scope="col">Observación</th>
      <th scope="col">Foto</th>
      <th scope="col">Marca</th>
    </tr>
  </thead>
  <tbody>
    @php
      $i = 1;
    @endphp
    @foreach($arti as $a)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$a->referencia}}</td>
      <td>{{$a->nombre}}</td>
      <td>{{$a->decripcion}}</td>
      <td>{{$a->color}}</td>
      <td>{{$a->precioUnitario}}</td>
      <td>{{$a->observacion}}</td>
      <td><img src="https://muchosnegociosrentables.com/wp-content/uploads/2021/01/como-montar-una-tienda-de-deportes.jpg" alt="..." width="50px" height="50px"></td>
      <td>{{$a->descripcion}}</td>
      @php 
      $i = $i + 1;
      @endphp
    </tr>
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