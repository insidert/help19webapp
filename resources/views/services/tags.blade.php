<div class="my-3 d-flex align-items-center flex-wrap">
  <small><i class="bi bi-tag me-3"></i></small>
  <h6 class="mb-0">
    @foreach ($tags as $tag)
      <span class="badge bg-dark my-2 me-2">{{ $tag->name }}</span>
    @endforeach
  </h6>
</div>