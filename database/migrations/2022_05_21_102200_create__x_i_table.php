<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXITable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_x_i', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nis', 255);
            $table->string('nama', 255);
            $table->string('JK', 255);
            $table->string('rayon', 255);
            $table->string('rombel', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_x_i');
    }
}
