<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('parts')->insert([
            ['part_id' => 1, 'part_name' => 'akkumulátor'],
            ['part_id' => 2, 'part_name' => 'kijelző'],
            ['part_id' => 3, 'part_name' => 'töltőcsatlakozó'],
            ['part_id' => 4, 'part_name' => 'bekapcsoló gomb'],
            ['part_id' => 5, 'part_name' => 'hangerő gomb'],
            ['part_id' => 6, 'part_name' => 'hátlapi kamera'],
            ['part_id' => 7, 'part_name' => 'kamera lencse'],
            ['part_id' => 8, 'part_name' => 'hangszóró'],
            ['part_id' => 9, 'part_name' => 'szoftveres javítás'],
        ]);
    }
}
