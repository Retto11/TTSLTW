@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-bold mb-4">Thêm sản phẩm</h1>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="name">Tên sản phẩm</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label for="price">Giá</label>
            <input type="number" name="price" value="{{ old('price') }}" required>
        </div>

        <div class="mb-4">
            <label for="description">Mô tả</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label for="stock">Số lượng tồn</label>
            <input type="number" name="stock" value="{{ old('stock') }}" required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="form-label">Danh mục</label>
            <select name="category_id" id="category_id" class="form-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="image">Ảnh sản phẩm</label>
            <input type="file" name="image" accept="image/*">
        </div>

        <button type="submit" id="add-product">Thêm sản phẩm</button>
    </form>
    <style>
        button[type="submit"]#add-product {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        button[type="submit"]#add-product:hover {
            background-color: #45a049;
        }
    </style>
@endsection
