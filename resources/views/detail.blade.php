@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center m-5">Carrito</h1>
    <?php $totalPrice = 0; ?>
    @foreach ($cartItems as $cartItem)
    <?php $totalPrice += $cartItem->price; ?>
    <form action="{{ route('delete.store') }}" method="post">
        @csrf
        <div class="row justify-content-center align-items-center mb-4">
            <div class="border rounded p-3 d-flex justify-content-between align-items-center w-75">
                <div class="col-md-4 text-center">
                    <img src="{{ $cartItem->url_image }}" alt="{{ $cartItem->name }}" style="max-width: 150px;">
                </div>
                <div class="col-md-6 text-left w-25">
                    <input type="hidden" name="cart_id" value="{{ $cartItem->id }}">
                    <p>{{ $cartItem->name }}</p>
                    <p>{{ $cartItem->description }}</p>
                    <h3>${{ $cartItem->price }}</h3>
                </div>
                <div class="col-md-2 text-right w-30">
                    <button type="submit" class="btn btn-danger w-100 rounded" style="background-color: #e5383b;border-color: #e5383b;">Quitar del carrito</button>
                </div>
            </div>
        </div>
    </form>
    @endforeach
    <h1 class="text-center m-5">Valor total: ${{ $totalPrice }}</h1>
</div>
@endsection
