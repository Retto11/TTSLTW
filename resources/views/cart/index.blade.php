@extends('layouts.master')

@section('title', 'Giỏ hàng của bạn')

@section('content')
<h2>Giỏ hàng của bạn</h2>
@php $cart = session('cart', []); @endphp

@if(count($cart) > 0)
<table class="table">
  <thead>
    <tr><th>Sản phẩm</th><th>Giá</th><th>Số lượng</th><th>Tổng</th><th></th></tr>
  </thead>
  <tbody>
    @foreach($cart as $id => $item)
      <tr>
        <td>{{ $item['name'] }}</td>
        <td>{{ number_format($item['price']) }} VND</td>
        <td>{{ $item['quantity'] }}</td>
        <td>{{ number_format($item['price'] * $item['quantity']) }} VND</td>
        <td><a href="{{ route('cart.remove', $id) }}" class="btn btn-sm btn-danger">Xoá</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
@else
<div class="alert alert-warning">Giỏ hàng đang trống.</div>
@endif
@endsection