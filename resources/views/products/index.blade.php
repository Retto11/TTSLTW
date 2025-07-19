@extends('layouts.master')

@section('title', 'Danh sách sản phẩm')

@section('content')
@if (isset($searchTerm))
    <div class="alert alert-info">
        Kết quả cho từ khóa: <strong>{{ $searchTerm }}</strong>
    </div>
@endif

<div class="row">
    @forelse ($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ number_format($product->price, 0, ',', '.') }} VND</p>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning text-center">Không tìm thấy sản phẩm nào phù hợp.</div>
        </div>
    @endforelse
</div>
@endsection