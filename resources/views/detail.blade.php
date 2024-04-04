@extends('layouts.app')

@section('content')


<body>
    <div class="container">
        <h1 class="text-center m-5">Carrito</h1>
        @foreach ($cartItems as $cartItem)
        <form action="{{route('delete.store')}}" method="post">
            @csrf
            <div class="row justify-content-center align-items-center mb-4">
                <div class="col-md-8">
                    <div class="border p-3 d-flex justify-content-center align-items-center"> 
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{$cartItem->url_image}}" alt="{{$cartItem->name}}" style="max-width: 150px;">
                            </div>
                            <div class="col-md-6 text-left">
                                <p>{{$cartItem->name}}</p>
                                <h3>${{$cartItem->price}}</h3>
                            </div>
                            <div class="col-md-2 text-right">
                                <button type="submit" class="btn btn-danger w-600 rounded" style="background-color: #f00;border-color: #f00;">Quitar del carrito</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</body>
@endsection
