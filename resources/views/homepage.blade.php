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
      <h4 class="fw-bold">Cities</h4>
    </div>
    @foreach ($cities as $city)
        <div class="col-sm-12 col-md-2 mb-3">
          <div class="p-3 shadow">
            <a href="{{ route('cities.show', ['city' => $city->slug]) }}">{{ ucwords($city->name) }}</a>
          </div>
        </div>
    @endforeach
  </div>
</div>
@endsection