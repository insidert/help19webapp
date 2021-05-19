@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col-sm-12 col-md-8 mb-4">
      <div>
        <h1 class="fw-bold mb-0">Help 19</h1>
        <h5>Add and search food delivery services, hospitals, medical suppliers and testing centers to help Covid-19. No sign up required.</h5>
        <a href="/services/create" class="btn btn-secondary">Create New Service</a>
      </div>

      <div class="mt-5">
        <div class="mb-4">
          <h4 class="fw-bold mb-0"><i class="bi bi-building"></i> Cities</h4>
          <small>Sorted Alphabetically.</small>
        </div>

        @foreach ($cities as $city)
          <div class="mb-4 border-bottom pb-3 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold mb-0"><a href="{{ route('cities.show', ['city' => $city->id]) }}">{{ ucwords($city->name) }}</a></h6>
            <small>{{ $city->state ? ucwords($city->state) : '-' }}</small>
          </div>
        @endforeach
      </div>

    </div>
    <div class="col-sm-12 col-md-4">
      <div class="p-5 shadow">
        <div class="text-center mb-4">
          <img src="/images/help19.png" alt="Help19" height="128" class="rounded-circle">
        </div>
        <p class="mb-0">Help 19, is community-driven and open-source project. It means, any one can add details to the website and the code written to build this project is avilable to every one. If you are a developer, you can make changes to the website directly.</p>
        <a href="/contribute">Read the contribution guide.</a>

        <p class="mt-5 mb-0">Got some ideas? <a href="/contact">Contact us</a> anytime!</p>
      </div>
    </div>
  </div>
</div>
@endsection