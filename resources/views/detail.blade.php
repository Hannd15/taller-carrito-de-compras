@extends('layouts.app')

@section('content')
<h1 class="text-center m-5">Productos</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="{{asset('imgs/bomDia.jpg')}}" alt="Rude Cat">
        </div>
        <div class="col-md-4 text-left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit amet nihil debitis nobis, veniam voluptates quaerat ipsum cumque recusandae ea nulla aperiam maxime magnam, molestiae soluta sint maiores voluptatem veritatis!</p>
            <h3>$Un morbillon de pesos</h3>
            <button type="button" class="btn btn-primary">Añadir al carrito</button>
        </div>
    </div>
</div>
@endsection