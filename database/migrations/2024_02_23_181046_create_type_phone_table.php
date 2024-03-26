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
        Schema::create('type_phone', function (Blueprint $table) {
            $table->integer('type_id')->primary(); // 'type_id' mint azonosító
            $table->string('type_name', 15)->nullable();
            $table->integer('phonemodel_id')->nullable();
            $table->string('type_image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_phone');
    }
};
