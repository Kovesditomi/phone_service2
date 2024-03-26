<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id('part_id');
            $table->string('part_name', 35);
            $table->timestamps();
            $table->unsignedBigInteger('phonemodel_id');
        });

        // Adatok beszúrása
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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts');
    }
};
