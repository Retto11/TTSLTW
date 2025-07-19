<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'image',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}