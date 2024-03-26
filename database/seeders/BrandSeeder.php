<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('brand')->insert([
            [
                'brand_id' => 1,
                'brand_name' => 'Apple',
                'brand_image' => 'apple.jpg',
            ],
            [
                'brand_id' => 2,
                'brand_name' => 'Xiaomi',
                'brand_image' => 'xiaomi.jpg',
            ],
            [
                'brand_id' => 3,
                'brand_name' => 'Samsung',
                'brand_image' => 'samsung.jpg',
            ],
            [
                'brand_id' => 4,
                'brand_name' => 'Huawei',
                'brand_image' => 'huawei.jpg',
            ],
            [
                'brand_id' => 5,
                'brand_name' => 'Nokia',
                'brand_image' => 'nokia.jpg',
            ],
            [
                'brand_id' => 6,
                'brand_name' => 'OnePlus',
                'brand_image' => 'oneplus.jpg',
            ],
            [
                'brand_id' => 7,
                'brand_name' => 'Sony',
                'brand_image' => 'sony.jpg',
            ],
            [
                'brand_id' => 8,
                'brand_name' => 'LG',
                'brand_image' => 'lg.jpg',
            ],
            [
                'brand_id' => 9,
                'brand_name' => 'Lenovo',
                'brand_image' => 'lenovo.jpg',
            ],
            [
                'brand_id' => 10,
                'brand_name' => 'Pixel',
                'brand_image' => 'pixel.jpg',
            ],
            // Itt jönnek a további adatsorok...
        ]);
    }
}
