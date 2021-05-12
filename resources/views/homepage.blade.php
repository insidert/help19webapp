@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="fw-bold mb-0">Help 19</h1>
      <p>Community driven help resources for Covid-19</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12">
      <h4 class="fw-bold mb-0">Cities</h4>
      <small>Sorted Alphabetically.</small>
    </div>
    @foreach ($cities as $city)
        <div class="col-sm-12 col-md-2 my-3">
          <div class="p-3 shadow">
            <h5 class="fw-bold"><a href="{{ route('cities.show', ['city' => $city->id]) }}">{{ ucwords($city->name) }}</a></h5>
            @if ($city->state)
              <small>{{ ucwords($city->state) }}</small>
            @endif
          </div>
        </div>
    @endforeach
  </div>
</div>
@endsection