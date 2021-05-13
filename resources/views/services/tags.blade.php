<h6>
  @foreach ($tags as $tag)
    <span class="badge bg-dark my-2 ms-2">{{ $tag->name }}</span>
  @endforeach
</h6>