<div class="bg-light p-4 mt-3">
  <small>Tags</small>
  <h6 class="mb-0">
    @foreach ($tags as $tag)
      <span class="badge bg-dark my-2 me-2">{{ $tag->name }}</span>
    @endforeach
  </h6>
</div>