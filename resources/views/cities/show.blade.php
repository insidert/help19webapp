@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="fw-bold">{{ ucwords($city->name) }}</h1>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-sm-12 col-md-3 mb-3">
      <h5 class="fw-bold">Filters</h5>
      <form method="GET" action="{{ route('cities.show', ['city' => $city]) }}">
        @foreach ($tags_for_filters as $key => $tag_item)
          <div class="my-3 p-3 bg-light">
            <p class="fw-bold">{{ ucwords($key) }}</p>
            @foreach ($tag_item as $item)
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="{{ $key . $item['id'] }}" name="filter" value="{{ $item['id'] }}">
                <label class="form-check-label" for="{{ $key . $item['id'] }}">{{ ucwords($item['name']) }}</label>
              </div>
            @endforeach
  </div>
@endforeach
        <button class="btn btn-sm btn-secondary" type="submit">Filter Results</button>
      </form>
    </div>
    <div class="col-sm-12 col-md-9">
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
          <p class="mb-0">{{ $service->phone }}</p>
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