<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoskoKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posko__kesehatans', function (Blueprint $table) {
            $table->id("id_posko");
            $table->string('nama_posko',50);
            $table->string('alamat_kesehatan',200);
            $table->string('no_telp_kesehatan',14);            
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->string('cover_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posko__kesehatans');
    }
}
