@extends('layouts.app')

@section('content')
<div class="container mb-5">
  <div class="row">
    <div class="col-md-4 mx-auto">
      @include('errors')

      <h5 class="fw-bold">Login</h5>
      <form action="/login" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-secondary">Login</button>
      </form>
    </div>
  </div>
</div>
@endsection