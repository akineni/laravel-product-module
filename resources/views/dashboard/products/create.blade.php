@extends('dashboard.layout')

@section('content')
  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Create Product</h5>
          <!-- <small class="text-muted float-end">Default label</small> -->
        </div>
        <div class="card-body">

          <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Product name" value="{{ old('name') }}" />
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="form-price">Price</label>
                <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                        <span class="input-group-text">₦</span>
                        <input
                            type="text"
                            name="price"
                            class="form-control"
                            placeholder="100"
                            aria-label="Amount (to the nearest dollar)"
                            value="{{ old('price') }}"
                        />
                        <span class="input-group-text">.00</span>
                    </div>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="form-file">Image(s)</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="images[]" id="form-file" multiple />
                    @error('images')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                <div class="col-sm-10">
                    <textarea
                        name="description"
                        id="basic-default-message"
                        class="form-control"
                        placeholder="Describe your product in a few words..."
                        aria-label="Describe your product in a few words..."
                        aria-describedby="basic-icon-default-message2"
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection