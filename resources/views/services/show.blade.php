@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row">

    <div class="col-sm-12 col-md-6 mx-auto">

        @if (session('status'))
          <div class="my-3">
            @include('status')
          </div>
        @endif

        <h4 class="fw-bold">{{ $service->name }}</h4>
        <p class="mb-0"><i class="bi bi-telephone-outbound me-3"></i> {{ $service->phone }}</p>
        <p class="mb-0">
          <i class="bi bi-geo-alt me-3"></i> 
          @if ($service->address)
            {{ $service->address }},
          @endif  
          {{ ucwords($service->city->name) }}.
        </p>

        @if ($service->url)
        <p class="mb-0">
          <i class="bi bi-link-45deg me-3"></i> <a href="{{ $service->url }}" target="_blank">{{ $service->url }}</a>
        </p>
        @endif

        @if ($service->description)
        <p class="mt-0"><i class="bi bi-file-earmark-text me-3"></i> {{ $service->description }}</p>
        @endif

        @include('services.tags', ['tags' => $service->tags])

        <div class="p-4 my-4 bg-light rounded">
          <p class="mb-0">Actions</p>
          <share 
            title="{{ $service->name }}"
            text="{{ $service->name }}"
            url="{{ route('services.show', ['service' => $service->id]) }}"
            short-text="Service Details"  
          ></share>
        </div>

        <status 
          v-bind:status="{{ json_encode($service->status) }}" 
          url="{{ route('services.status.store', ['service' => $service->id]) }}">
        </status>


    </div>
  </div>
</div>
@endsection