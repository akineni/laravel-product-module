@extends('dashboard.layout')

@section('content')
<div class="row">

  {{-- Total Products --}}
  <div class="col-lg-3 col-md-6 col-12 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <i class="bx bx-cube text-primary fs-1"></i>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Total Products</span>
        <h3 class="card-title mb-2">{{ $totalProducts }}</h3>
      </div>
    </div>
  </div>

  {{-- Deleted Products --}}
  <div class="col-lg-3 col-md-6 col-12 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <i class="bx bx-trash text-danger fs-1"></i>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Deleted Products</span>
        <h3 class="card-title mb-2">{{ $deletedProducts }}</h3>
      </div>
    </div>
  </div>

  {{-- Total Images --}}
  <div class="col-lg-3 col-md-6 col-12 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <i class="bx bx-image text-info fs-1"></i>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Total Images</span>
        <h3 class="card-title mb-2">{{ $totalImages }}</h3>
      </div>
    </div>
  </div>

  {{-- Products Today --}}
  <div class="col-lg-3 col-md-6 col-12 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <i class="bx bx-calendar text-warning fs-1"></i>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Added Today</span>
        <h3 class="card-title mb-2">{{ $productsToday }}</h3>
      </div>
    </div>
  </div>

</div>
@endsection
