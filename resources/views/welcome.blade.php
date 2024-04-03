@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img src="{{ asset('imgs/slider-1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('imgs/slider-2.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('imgs/slider-3.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 class="text-center m-5">Productos</h1>
    <div class="container text-center mx-auto">
        <div class="row gap-3">
        @foreach ($products as $product)
            <div class="card col-md-3" style="width: 18rem; col-md-3">
                <form action="{{ route('insert.store') }}" method="post">
                    @csrf
                    <img src="{{ $product->url_image }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                       <input type="hidden" name="product_id" value="{{ $product->id }}">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text">{{ $product->price }}</p>
                      <button type="submit" class="btn btn-primary" style="background-color: #f4860b;">Añadir al carrito</button>
                    </div>
                </form>
              </div> 

              
        @endforeach
        </div>
    </div>
@endsection