<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typepart')->insert([
            [
                'type_part_id' => 1,
                'type_part_name' => 'Iphone 14 plus akkumulátor',
                'repair' => '01:00:00',
                'type_id' => 1,
                'part_id' => 1,
                'price' => 19990,
            ],
            [
                'type_part_id' => 2,
                'type_part_name' => 'Iphone 14 plus kijelző',
                'repair' => '02:00:00',
                'type_id' => 1,
                'part_id' => 2,
                'price' => 24990,
            ],
            [
                'type_part_id' => 3,
                'type_part_name' => 'Samsung Galaxy S20 hátlap',
                'repair' => '00:45:00',
                'type_id' => 2,
                'part_id' => 3,
                'price' => 12990,
            ],
            [
                'type_part_id' => 4,
                'type_part_name' => 'Samsung Galaxy S20 kijelző',
                'repair' => '01:30:00',
                'type_id' => 2,
                'part_id' => 2,
                'price' => 27990,
            ],
            [
                'type_part_id' => 5,
                'type_part_name' => 'Példa 5',
                'repair' => '00:30:00',
                'type_id' => 3,
                'part_id' => 4,
                'price' => 8990,
            ],
            [
                'type_part_id' => 6,
                'type_part_name' => 'Példa 6',
                'repair' => '01:45:00',
                'type_id' => 4,
                'part_id' => 5,
                'price' => 17990,
            ],
            [
                'type_part_id' => 7,
                'type_part_name' => 'Példa 7',
                'repair' => '00:45:00',
                'type_id' => 5,
                'part_id' => 6,
                'price' => 9990,
            ],
            [
                'type_part_id' => 8,
                'type_part_name' => 'Példa 8',
                'repair' => '02:15:00',
                'type_id' => 6,
                'part_id' => 7,
                'price' => 21990,
            ],
            [
                'type_part_id' => 9,
                'type_part_name' => 'Példa 9',
                'repair' => '01:00:00',
                'type_id' => 7,
                'part_id' => 8,
                'price' => 12990,
            ],
            [
                'type_part_id' => 10,
                'type_part_name' => 'Példa 10',
                'repair' => '01:30:00',
                'type_id' => 8,
                'part_id' => 9,
                'price' => 15990,
            ],
            [
                'type_part_id' => 11,
                'type_part_name' => 'Példa 11',
                'repair' => '01:15:00',
                'type_id' => 9,
                'part_id' => 10,
                'price' => 14990,
            ],
            [
                'type_part_id' => 12,
                'type_part_name' => 'Példa 12',
                'repair' => '00:30:00',
                'type_id' => 10,
                'part_id' => 11,
                'price' => 8990,
            ],
            [
                'type_part_id' => 13,
                'type_part_name' => 'Példa 13',
                'repair' => '02:00:00',
                'type_id' => 11,
                'part_id' => 12,
                'price' => 19990,
            ],
            [
                'type_part_id' => 14,
                'type_part_name' => 'Példa 14',
                'repair' => '01:45:00',
                'type_id' => 12,
                'part_id' => 13,
                'price' => 17990,
            ],
            [
                'type_part_id' => 15,
                'type_part_name' => 'Példa 15',
                'repair' => '00:45:00',
                'type_id' => 13,
                'part_id' => 14,
                'price' => 9990,
            ],[
                'type_part_id' => 16,
                'type_part_name' => 'Sony Xperia XZ hátlap',
                'repair' => '00:45:00',
                'type_id' => 3,
                'part_id' => 3,
                'price' => 15990,
            ],
            [
                'type_part_id' => 17,
                'type_part_name' => 'Sony Xperia XZ kijelző',
                'repair' => '01:30:00',
                'type_id' => 3,
                'part_id' => 2,
                'price' => 21990,
            ],
            [
                'type_part_id' => 18,
                'type_part_name' => 'Samsung Galaxy S9 hátlap',
                'repair' => '00:40:00',
                'type_id' => 6,
                'part_id' => 3,
                'price' => 13990,
            ],
            [
                'type_part_id' => 19,
                'type_part_name' => 'Samsung Galaxy S9 kijelző',
                'repair' => '01:20:00',
                'type_id' => 6,
                'part_id' => 2,
                'price' => 19990,
            ],
            [
                'type_part_id' => 20,
                'type_part_name' => 'iPhone X hátlap',
                'repair' => '00:45:00',
                'type_id' => 7,
                'part_id' => 3,
                'price' => 18990,
            ],
            [
                'type_part_id' => 21,
                'type_part_name' => 'iPhone X kijelző',
                'repair' => '01:30:00',
                'type_id' => 7,
                'part_id' => 2,
                'price' => 25990,
            ],
            [
                'type_part_id' => 22,
                'type_part_name' => 'OnePlus 7T hátlap',
                'repair' => '00:50:00',
                'type_id' => 9,
                'part_id' => 3,
                'price' => 15990,
            ],
            [
                'type_part_id' => 23,
                'type_part_name' => 'OnePlus 7T kijelző',
                'repair' => '01:15:00',
                'type_id' => 9,
                'part_id' => 2,
                'price' => 21990,
            ],
            [
                'type_part_id' => 24,
                'type_part_name' => 'Xiaomi Mi 9T hátlap',
                'repair' => '00:55:00',
                'type_id' => 10,
                'part_id' => 3,
                'price' => 16990,
            ],
            [
                'type_part_id' => 25,
                'type_part_name' => 'Huawei P30 Pro hátlap',
                'repair' => '00:55:00',
                'type_id' => 8,
                'part_id' => 3,
                'price' => 16990,
            ],
            

            [
                'type_part_id' => 214,
                'type_part_name' => 'Lg K50 S kamera lencse',
                'repair' => '01:00:00',
                'type_id' => 24,
                'part_id' => 6,
                'price' => 14990,
            ],
            // ... További adatok ...
        ]);
    }
}
