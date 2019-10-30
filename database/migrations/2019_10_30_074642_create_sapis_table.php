<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSapisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sapis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_jenis_sapi');
            $table->String('id_user');
            $table->integer('umur');
            $table->integer('jumlah');
            $table->String('deskripsi');
            $table->String('foto');
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
        Schema::dropIfExists('sapis');
    }
}
