@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-bold mb-4">Sửa sản phẩm</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="name">Tên sản phẩm</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="mb-4">
            <label for="price">Giá</label>
            <input type="number" name="price" value="{{ $product->price }}" required>
        </div>

        <div class="mb-4">
            <label for="description">Mô tả</label>
            <textarea name="description" class="w-full border rounded p-2">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="stock">Số lượng tồn</label>
            <input type="number" name="stock" value="{{ $product->stock }}" required>
        </div>

        <div class="mb-4">
            <label for="category_id">Danh mục</label>
            <select name="category_id" required class="w-full">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="image">Ảnh mới</label>
            <input type="file" name="image" accept="image/*">
            <p class="text-sm text-gray-600">Bỏ trống nếu không muốn thay ảnh</p>
        </div>

        @if ($product->image)
            <div class="mb-4">
                <p>Ảnh hiện tại:</p>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-24 h-24 object-contain bg-white p-1 rounded shadow">
            </div>
        @endif

        <button type="submit" id="add-product">Cập nhật</button>
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
