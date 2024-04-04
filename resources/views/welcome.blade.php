@extends('layouts.app')

@section('content')
<h1 class="text-center m-5">Productos</h1>
<div class="row gap-3 text-center justify-content-center" style="padding-left: 30px;padding-right: 30px;">
    @foreach ($products as $product)
    <div class="card col-md-3 mx-auto d-inline-block" style="width: 18rem;">
        <form action="{{ route('insert.store') }}" method="post">
            @csrf
            <img src="{{ $product->url_image }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><strong>${{ $product->price }}</strong></p>
                <button type="submit" class="btn btn-primary" style="background-color: #f4860b;border-color: #f4860b">Añadir al carrito</button>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection
