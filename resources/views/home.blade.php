@extends('layouts.main')
@section('title', 'Home')
@section('content')
@if(session('alerts')) 
  <div class="alert alert-primary mt-3">
    {{ session('alerts') }}
  </div>
@endif
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-1">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
@endsection