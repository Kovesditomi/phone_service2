<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ public
    /**
     * Run the migrations.
     */
    function up()
    {
        Schema::create('typepart', function (Blueprint $table) {
            $table->bigIncrements('type_part_id');// Automatikus növekményű azonosító, amely egyezik az adatbázis 'type_part_id' mezőjével           
            $table->time('repair')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('part_id')->nullable();
            $table->integer('price')->nullable();
            
            // Az alábbi két sorral beállítjuk az indexeket a 'type_id' és 'part_id' oszlopokra
            $table->index('type_id');
            $table->index('part_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typepart');
    }
};
