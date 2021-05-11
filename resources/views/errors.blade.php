@if ($errors->any())
  <ul class="list-group my-3 border border-danger">
      <li class="list-group-item bg-danger text-white">Fix the following errors.</li>
      @foreach ($errors->all() as $error)
          <li class="list-group-item">{{ $error }}</li>
      @endforeach
  </ul>
@endif