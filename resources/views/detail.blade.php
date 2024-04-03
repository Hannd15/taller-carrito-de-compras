@extends('layouts.app')

@section('content')
<h1 class="text-center m-5">Carrito</h1>
<div class="container">
@foreach ($cartItems as $cartItem)
<form action="{{route('delete.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <img src="{{asset('imgs/bomDia.jpg')}}" alt="Rude Cat">
        </div>
        <div class="col-md-4 text-left">
            <p></p>
            <h3>$</h3>
            <button type="submit" class="btn btn-primary" style="background-color: #f4860b;border-color: #f4860b">Añadir al carrito</button>
        </div>
    </div>
</form>
</div>
@endforeach

@endsection
