@extends('dashboard.layout')

@section('content')
<div class="card">
  <h5 class="card-header">Product #{{$product->id}}</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-sm p-3">
          <div class="card-body">
            <h4 class="card-title text-primary">{{ $product->name }}</h4>
            <h5 class="text-success mb-3">₦{{ number_format($product->price, 2) }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="mb-0"><strong>Images Count:</strong> {{ $product->images->count() }}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap carousel -->
    <div class="row mt-4">
      <div class="col-md">
        <h5 class="my-4">Product Images</h5>

        <div id="carouselExample" class="carousel slide carousel-dark" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($product->images as $index => $image)
                    <li data-bs-target="#carouselExample" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($product->images as $index => $image)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <!-- php artisan storage:link -->
                        <img class="d-block m-auto" src="{{ asset('storage/' . $image->path) }}" alt="Slide {{ $index + 1 }}" height="500" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
                @if($product->images->isEmpty())
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/img/elements/placeholder.jpg" alt="No Image Available" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endif
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
      </div>
    </div>
</div>

@endsection