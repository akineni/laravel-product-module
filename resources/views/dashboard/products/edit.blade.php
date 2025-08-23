@extends('dashboard.layout')

@section('content')
<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Product</h5>
        <!-- <small class="text-muted float-end">Default label</small> -->
      </div>
      <div class="card-body">
        <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          @include('_partials.product-form')
        </form>
      </div>
    </div>
  </div>
</div>
@endsection