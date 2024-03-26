<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class InsertPartData extends Command
{
    protected $signature = 'insert:partdata';
    protected $description = 'Insert part data into the database';

    public function handle()
    {
        DB::table('part')->insert([
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

        $this->info('Part data inserted successfully.');
    }
}
