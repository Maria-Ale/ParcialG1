@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <CENTER><h1>TIENDA DEPORTIVA D & D</h1></CENTER> 
@stop

@section('content')
<center>
    <div class="card" style="width: 60rem;">
    <img src="https://jnretail.com/wp-content/uploads/slider/cache/93dd0119b38f5c1bcb645a5b38020212/gondola-con-maniqui-para-tienda-de-deportes.webp" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">"Explora nuestra tienda de ropa deportiva para encontrar caramañolas duraderas, 
        zapatos de rendimiento y conjuntos de camisetas que equilibran estilo y comodidad. 
        ¡Destaca en cada actividad con nuestra moda deportiva que te impulsa hacia adelante!"</p>
    </div>
    </div>
</center>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop