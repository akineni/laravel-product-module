@extends('dashboard.layout')

@section('content')
  <!-- Bordered Table -->
  <div class="card">
    <h5 class="card-header">Products</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        @if($products->isEmpty())
          <p>No products found.</p>
        @else
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image Count</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <strong>
                          <a href="{{ route('dashboard.products.show', $product->id) }}" target="_blank">
                            {{ $product->name }}
                          </a>
                        </strong>
                    </td>
                    <td>₦{{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ count($product->images) }}</td>
                    <td>
                        <div class="dropdown position-static">
                            <button
                                type="button"
                                class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"
                            >
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('dashboard.products.edit', $product->id) }}">
                                    <i class="bx bx-edit-alt me-1"></i> Edit
                                </a>

                                <a class="dropdown-item" href="{{ route('dashboard.products.show', $product->id) }}" target="_blank">
                                    <i class="bx bx-show me-1"></i> View
                                </a>

                                <form id="delete-product-{{ $product->id }}" action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        @endif
      </div>
    </div>
  </div>
  <!--/ Bordered Table -->

@endsection