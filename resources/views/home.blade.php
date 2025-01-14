@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/Slide1.png" class="d-block w-100 rounded" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Slide2.png" class="d-block w-100 rounded" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/Slide3.png" class="d-block w-100 rounded" alt="...">
    </div>
  </div>
</div>

    <div class="row pt-5">
        <div class="col-md-12 ">
            <h3 class="pb-2">Produk Kami</h3>
            <!-- <p>Belanja online murah, aman dan nyaman dari berbagai toko online di Indonesia.</p> -->
        </div>
        <div class="col-md-12">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-text">{{ $product['description'] }}</p>
                                <a href="{{ route('product', $product['id']) }}" class="btn1">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Menyertakan footer --}}
    @include('components.footer')
@endsection
