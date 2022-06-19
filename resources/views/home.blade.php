@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($products as $product)
                        <div class="card">
                        <img style="height: 100px; width: 100px;" src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 80) }}</p>
                            <p>R {{ $product->price }}</p>
                            <a href="/product/{{ $product->id }}" class="btn btn-info">View Product</a>
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
