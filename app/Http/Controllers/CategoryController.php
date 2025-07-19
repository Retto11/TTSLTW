<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
class CategoryController extends Controller
{
    // Hiển thị sản phẩm theo danh mục
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->get();

        return view('products.index', compact('products'));
    }
}