@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col">
      <h1 class="fw-bold">{{ ucwords($city->name) }}</h1>
    </div>
  </div>

  <div class="row mt-3 mt-md-5">
    <div class="col-sm-12 col-md-3 mb-3">
      <div class="d-none d-md-block">
        <h5 class="fw-bold"><i class="bi bi-funnel"></i> Filters</h5>
        <form method="GET" action="{{ route('cities.show', ['city' => $city]) }}">
          @foreach ($tags_for_filters as $key => $tag_item)
          <div class="my-3 p-3 bg-light">
            <p class="fw-bold">{{ ucwords($key) }}</p>
            @foreach ($tag_item as $item)
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="{{ $key . $item['id'] }}" name="filter"
                value="{{ $item['id'] }}">
              <label class="form-check-label" for="{{ $key . $item['id'] }}">{{ ucwords($item['name']) }}</label>
            </div>
            @endforeach
          </div>
          @endforeach
          <button class="btn btn-secondary w-100" type="submit">Filter Results</button>
        </form>
      </div>

      <div class="d-block d-md-none">
        <button type="button" class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#cityFiltersModal">
          <i class="bi bi-funnel"></i> Filter Results
        </button>

        <div class="modal fade" id="cityFiltersModal" tabindex="-1" aria-labelledby="cityFiltersModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="cityFiltersModalLabel">Filters</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="GET" action="{{ route('cities.show', ['city' => $city]) }}">
                  @foreach ($tags_for_filters as $key => $tag_item)
                  <div class="my-3 p-3 bg-light">
                    <p class="fw-bold">{{ ucwords($key) }}</p>
                    @foreach ($tag_item as $item)
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="sm-{{ $key . $item['id'] }}" name="filter"
                        value="{{ $item['id'] }}">
                      <label class="form-check-label" for="sm-{{ $key . $item['id'] }}">{{ ucwords($item['name']) }}</label>
                    </div>
                    @endforeach
                  </div>
                  @endforeach
                  <button class="btn btn-secondary w-100" type="submit">Filter Results</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-sm-12 col-md-9">
      <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div>
          <h5 class="fw-bold mb-0"><i class="bi bi-card-text"></i> Results</h5>
          @if ($tag_name != "")
            <p>for <strong>{{ ucwords($tag_name->name) }}</strong> in {{ ucwords($tag_name->type) }}</p>
          @endif
        </div>
        <share 
            title="{{ 'Help19' . ucwords($city->name) }}"
            text="{{ 'Service in' . $city->name }}"
            url="{{ route('cities.show', ['city' => $city->id]) }}"
            short-text="Results"  
          ></share>
      </div>

      @if (count($services) == 0)
      <div>
        <p class="text-danger">Sorry. No results found.</p>
      </div>
      @endif
      @foreach ($services as $service)
      <div class="py-4 border-bottom">
        @if ($service->status != "")
          @if ($service->status['name'] == 'verified')
            <small class="text-success"><i class="bi bi-patch-check me-1"></i> Verified</small>
          @endif

          @if ($service->status['name'] == 'not-working')
            <small class="text-warning"><i class="bi bi-telephone-x me-1"></i> Not working</small>
          @endif

          @if ($service->status['name'] == 'fake')
            <small class="text-danger"><i class="bi bi-hand-thumbs-down me-1"></i> Fake</small>
          @endif
        @endif
        <h4 class="fw-bold">
          {{ $service->name }}
        </h4>
        <p class="mb-0"><i class="bi bi-telephone-outbound me-3"></i> {{ $service->phone }}</p>
        @if ($service->address)
        <p class="mb-0"><i class="bi bi-geo-alt me-3"></i> {{ $service->address }}</p>
        @endif

        @if ($service->url)
        <p class="mb-0">
          <i class="bi bi-link-45deg me-3"></i> <a href="{{ $service->url }}" target="_blank">{{ $service->url }}</a>
        </p>
        @endif

        @if ($service->description)
        <p class="mt-0"><i class="bi bi-file-earmark-text me-3"></i> {{ $service->description }}</p>
        @endif

        @include('services.tags', ['tags' => $service->tags])

        <a href="{{ route('services.show', ['service' => $service->id]) }}"><i class="bi bi-pencil-square"></i> Share details / Change status</a>

        {{-- <status 
          v-bind:status="{{ json_encode($service->status) }}" 
          url="{{ route('services.status.store', ['service' => $service->id]) }}">
        </status> --}}

      </div>
      @endforeach

      <div class="mt-4">
        {{ $services->links() }}
      </div>

    </div>
  </div>
</div>
@endsection