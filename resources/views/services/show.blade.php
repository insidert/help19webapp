@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <h4 class="fw-bold">{{ $service->name }}</h4>
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

        <h6>
          @foreach ($service->tags as $tag)
            <span class="badge bg-dark">{{ $tag->name }}</span>
          @endforeach
        </h6>
    </div>
  </div>
</div>
@endsection