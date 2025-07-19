<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Tai nghe Bluetooth X9',
            'description' => 'Tai nghe không dây, pin 40 giờ',
            'price' => 590000,
            'stock' => 120,
            'image' => 'products/T1.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Tai nghe Gaming Razer Kraken',
            'description' => 'Âm thanh vòm 7.1, mic chống ồn',
            'price' => 1290000,
            'stock' => 60,
            'image' => 'products/T2.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Bàn phím cơ AKKO 3068',
            'description' => 'Switch Gateron, LED RGB',
            'price' => 890000,
            'stock' => 80,
            'image' => 'products/B1.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Bàn phím Logitech K380',
            'description' => 'Bluetooth, nhỏ gọn, pin 2 năm',
            'price' => 620000,
            'stock' => 100,
            'image' => 'products/B2.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Chuột dây Fuhlen L102',
            'description' => 'Thiết kế đơn giản, độ bền cao',
            'price' => 150000,
            'stock' => 200,
            'image' => 'products/C1.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Chuột dây Logitech M100',
            'description' => 'Chuột quang, cắm là dùng',
            'price' => 180000,
            'stock' => 150,
            'image' => 'products/C2.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Dây sạc USB-C Anker 1.8m',
            'description' => 'Sạc nhanh, chống rối, bền bỉ',
            'price' => 250000,
            'stock' => 300,
            'image' => 'products/D1.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Dây sạc Lightning Baseus',
            'description' => 'Tương thích iPhone, chống đứt',
            'price' => 190000,
            'stock' => 250,
            'image' => 'products/D2.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Lót chuột DareU ESP100',
            'description' => 'Kích thước lớn, chống trượt',
            'price' => 220000,
            'stock' => 180,
            'image' => 'products/LC1.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Lót chuột Logitech G240',
            'description' => 'Chuyên gaming, độ ma sát chuẩn',
            'price' => 270000,
            'stock' => 90,
            'image' => 'products/LC2.jpg',
            'category_id' => 5,
        ]);
    }
}