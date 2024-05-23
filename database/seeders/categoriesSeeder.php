<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Điện thoại'],
            ['name' => 'Máy tính'],
            ['name' => 'Máy tính bảng'],
            ['name' => 'Đồng hồ thông minh'],
            ['name' => 'Phụ kiện']
        ]);
        // DB::table('categories')->insert(
        //     [
        //         ['name' => 'Điện thoại'],
        //         ['name' => 'Laptop'],
        //         ['name' => 'Televisions'],
        //         ['name' => 'Watch'],
        //     ]
        // );
    }
}
