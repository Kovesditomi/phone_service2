<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Brand adatok beszúrása
        DB::table('brand')->insert([
            ['brand_id' => 1, 'brand_name' => 'Apple', 'brand_image' => 'apple.jpg'],
            ['brand_id' => 2, 'brand_name' => 'Xiaomi', 'brand_image' => 'xiaomi.jpg'],
            ['brand_id' => 3, 'brand_name' => 'Samsung', 'brand_image' => 'samsung.jpg'],
            ['brand_id' => 4, 'brand_name' => 'Huawei', 'brand_image' => 'huawei.jpg'],
            ['brand_id' => 5, 'brand_name' => 'Nokia', 'brand_image' => 'nokia.jpg'],
            ['brand_id' => 6, 'brand_name' => 'OnePlus', 'brand_image' => 'oneplus.jpg'],
            ['brand_id' => 7, 'brand_name' => 'Sony', 'brand_image' => 'sony.jpg'],
            ['brand_id' => 8, 'brand_name' => 'LG', 'brand_image' => 'lg.jpg'],
            ['brand_id' => 9, 'brand_name' => 'Lenovo', 'brand_image' => 'lenovo.jpg'],
            ['brand_id' => 10, 'brand_name' => 'Pixel', 'brand_image' => 'pixel.jpg'],
        ]);

        // Phonemodel adatok beszúrása
        DB::table('phonemodel')->insert([
            ['phonemodel_id' => 1, 'phonemodel_name' => '14', 'brand_id' => 1],
            ['phonemodel_id' => 2, 'phonemodel_name' => 'SE', 'brand_id' => 1],
            ['phonemodel_id' => 3, 'phonemodel_name' => 'Redmi', 'brand_id' => 2],
            ['phonemodel_id' => 4, 'phonemodel_name' => 'MI', 'brand_id' => 2],
            ['phonemodel_id' => 5, 'phonemodel_name' => 'Galaxy A', 'brand_id' => 3],
            ['phonemodel_id' => 6, 'phonemodel_name' => 'Galaxy S', 'brand_id' => 3],
            ['phonemodel_id' => 7, 'phonemodel_name' => 'P', 'brand_id' => 4],
            ['phonemodel_id' => 8, 'phonemodel_name' => 'Mate', 'brand_id' => 4],
            ['phonemodel_id' => 9, 'phonemodel_name' => '5.1', 'brand_id' => 5],
            ['phonemodel_id' => 10, 'phonemodel_name' => '6.1', 'brand_id' => 5],
            ['phonemodel_id' => 11, 'phonemodel_name' => '10', 'brand_id' => 6],
            ['phonemodel_id' => 12, 'phonemodel_name' => '9', 'brand_id' => 6],
            ['phonemodel_id' => 13, 'phonemodel_name' => 'Xperia Z', 'brand_id' => 7],
            ['phonemodel_id' => 14, 'phonemodel_name' => 'Xperia XA', 'brand_id' => 7],
            ['phonemodel_id' => 15, 'phonemodel_name' => 'K50', 'brand_id' => 8],
            ['phonemodel_id' => 16, 'phonemodel_name' => 'G', 'brand_id' => 8],
            ['phonemodel_id' => 17, 'phonemodel_name' => 'Vibe', 'brand_id' => 9],
            ['phonemodel_id' => 18, 'phonemodel_name' => 'A', 'brand_id' => 9],
            ['phonemodel_id' => 19, 'phonemodel_name' => '3', 'brand_id' => 10],
            ['phonemodel_id' => 20, 'phonemodel_name' => '4', 'brand_id' => 10],
        ]);
    }
}

