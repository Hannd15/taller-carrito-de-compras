@extends('layouts.app')

@section('content')
<h1 class="text-center m-5">Carrito</h1>
<div class="container">
@foreach ($cartItems as $cartItem)
<form action="{{route('delete.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <img src="{{$cartItem->url_image}}" alt="{{$cartItem->name}}">
        </div>
        <div class="col-md-4 text-left">
            <p>{{$cartItem->name}}</p>
            <h3>${{$cartItem->price}}</h3>
            <button type="submit" class="btn btn-primary" style="background-color: #f4860b;border-color: #f4860b">Añadir al carrito</button>
        </div>
    </div>
</form>
</div>
@endforeach

@endsection
