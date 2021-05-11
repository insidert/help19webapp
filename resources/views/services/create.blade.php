@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h1 class="fw-bold mb-4">Create new service</h1>

      @include('errors')

      <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Service Name (Required)</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" autocomplete="off" required>
        </div>
        <div class="mb-3">
          <label for="contact" class="form-label">Contact (Required)</label>
          <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact') }}"  autocomplete="off" required>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <textarea class="form-control" id="address" name="address" rows="3">{{ old('address') }}</textarea>
        </div>
        <div class="mb-3">
          <label for="url" class="form-label">Url</label>
          <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}" autocomplete="off">
        </div>
        <div>
          <p class="mb-0">Tags</p>
          <small>At least one tag is required.</small>
          @foreach ($tags as $key => $tag_item)
            <div class="my-3 p-3 bg-light">
              <p class="fw-bold">{{ ucwords($key) }}</p>
              @foreach ($tag_item as $item)
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="{{ $key . $item }}" name="tags[{{ $key }}]" value="{{ $item }}">
                  <label class="form-check-label" for="{{ $key . $item }}">{{ ucwords($item) }}</label>
                </div>
              @endforeach
            </div>
          @endforeach
        </div>
        <div>
          <button type="submit" class="btn btn-secondary">Create Service</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection