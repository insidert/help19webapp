@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="row">

    <div class="col-sm-12 col-md-4 mx-auto">

        @if (session('status'))
          <div class="my-3">
            @include('status')
          </div>
        @endif

        <h4 class="fw-bold">{{ $service->name }}</h4>
        <p class="mb-0"><i class="bi bi-telephone-outbound me-3"></i> {{ $service->phone }}</p>
        @if ($service->address)
        <p class="mb-0"><i class="bi bi-geo-alt me-3"></i> {{ $service->address }}</p>
        @endif

        @if ($service->description)
        <p class="mt-3">{{ $service->description }}</p>
        @endif

        @if ($service->url)
        <div class="mt-2 mb-4">
          <a href="{{ $service->url }}" target="_blank">{{ $service->url }}</a>
        </div>
        @endif

        @include('services.tags', ['tags' => $service->tags])

        <div class="p-4 mt-4 bg-light rounded">
          <p class="mb-0">Actions</p>
          <share 
            title="{{ $service->name }}"
            text="{{ $service->description ?? 'Serivce details'}}"
            url="{{ route('services.show', ['service' => $service->id]) }}"
            short-text="Service Details"  
          ></share>
        </div>

    </div>
  </div>
</div>
@endsection