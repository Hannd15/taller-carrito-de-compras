@extends('layouts.app')

@section('content')
<h1 class="text-center m-5">Carrito</h1>
<div class="container">
<form>
    <div class="row">
        <div class="col-md-8">
            <img src="{{asset('imgs/bomDia.jpg')}}" alt="Rude Cat">
        </div>
        <div class="col-md-4 text-left">
            <p></p>
            <h3>$</h3>
            <button type="button" class="btn btn-primary">Añadir al carrito</button>
        </div>
    </div>
</div>
</form>

@endsection
