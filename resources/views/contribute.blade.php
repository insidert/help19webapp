@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h3 class="fw-bold">Contribute to Help19</h3>
      <div class="mt-5">
        <h5 class="fw-bold">Add services</h5>
        <p>You can directly add new services to the website. <a href="/services/create">Click here</a> to create a new service. No registation required.</p>
        <p>Once a service is created, you can copy the link and share it. Or you can click on the share icon.</p>
      </div>

      <div class="mt-5">
        <h5 class="fw-bold">Add improvements to the website</h5>
        <p>If you are a developer, you may add improvements to the website by creating a merge or pull request to the GitHub repository. This website is built with Laravel.</p>

        <a href="https://github.com/insidert/help19webapp" target="_blank">GitHub Repository</a>
      </div>
    </div>
  </div>
</div>
@endsection