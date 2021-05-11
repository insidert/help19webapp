@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">

    @if (session('status'))
      <div class="col-12">
        @include('status')
      </div>
    @endif

    <div class="col-sm-12">
        <h4 class="fw-bold">{{ $service->name }}</h4>
        <p class="mb-0"><i class="bi bi-telephone-outbound me-3"></i> {{ $service->contact ?? 'No contact details' }}</p>
        @if ($service->address)
        <p class="mb-0"><i class="bi bi-geo-alt me-3"></i> {{ $service->address }}</p>
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
  </div>
</div>
@endsection