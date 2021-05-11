@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="fw-bold">{{ ucwords($city_name->name) }}</h1>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-sm-12 col-md-2">
      <h5 class="fw-bold">Filters</h5>
      {{-- <form method="GET" action="{{ route('cities.show', ['city' => $city]) }}">
        @foreach ($tag_types as $tag_type)
        <div class="form-check">
          <input class="form-check-input" type="radio" id="{{ $tag_type }}" name="type" value="{{ $tag_type }}">
          <label class="form-check-label" for="{{ $tag_type }}">{{ $tag_type }}</label>
        </div>
        @endforeach
        <button class="btn btn-sm btn-primary" type="submit">Filter Results</button>
      </form> --}}
    </div>
    <div class="col-sm-12 col-md-10">
        <h5 class="fw-bold">Results</h5>
        @if (count($services) == 0)
        <div>
          <p class="text-danger">Sorry. No results found.</p>
        </div>
        @endif
        @foreach ($services as $service)
        <div class="py-4 border-bottom">
          <a href="{{ route('services.show', ['service' => $service->id]) }}">
            <h4 class="fw-bold">{{ $service->name }}</h4>
          </a>
          <p class="mb-0">{{ $service->contact ?? 'No contact details' }}</p>
          @if ($service->address)
          <p class="mb-0">{{ $service->address }}</p>
          @endif

          @if ($service->description)
          <p>{{ $service->description }}</p>
          @endif

          @if ($service->url)
          <div class="mt-2 mb-4">
            <a href="{{ $service->url }}" target="_blank">{{ $service->url }}</a>
          </div>
          @endif

          @include('services.tags', ['tags' => $service->tags])

        </div>
        @endforeach
      </div>
  </div>
</div>
@endsection