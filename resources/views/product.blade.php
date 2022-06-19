@extends('layouts.app')

@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img style="max-width: 50%;" src="{{ $product->image }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $product->title }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <p class="card-text"><small class="text-muted">R {{ $product->price }}</small></p>
        <a href="/home" class="btn btn-dark">Back</a>
        <a href="#" class="btn btn-success">Add to Cart</a>
      </div>
    </div>
  </div>
</div>
@endsection
