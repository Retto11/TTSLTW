@extends('layouts.master')

@section('title', 'Giỏ hàng của bạn')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow mb-4">
      <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
      <div class="card-body">
        <h3 class="card-title">{{ $product->name }}</h3>
        <p class="card-text text-muted">{{ $product->description }}</p>
        <p class="card-text fw-bold">Giá: {{ number_format($product->price, 0, ',', '.') }} VND</p>
        <a href="/cart/add/{{ $product->id }}" class="btn btn-success">
          🛒 Thêm vào giỏ
        </a>
      </div>
    </div>
  </div>
</div>
@endsection