<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Tai nghe', 'description' => 'Các loại tai nghe chất lượng']);
        Category::create(['name' => 'Bàn phím', 'description' => 'Bàn phím cơ và văn phòng']);
        Category::create(['name' => 'Chuột dây', 'description' => 'Chuột máy tính có dây']);
        Category::create(['name' => 'Dây sạc', 'description' => 'Dây sạc điện thoại và laptop']);
        Category::create(['name' => 'Lót chuột', 'description' => 'Miếng lót chuột êm và chống trượt']);
    }
}