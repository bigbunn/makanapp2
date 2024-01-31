<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->enum('waktu_makan',['pagi','siang','malam']);
            $table->string('nasi');
            $table->string('lauk_satu');
            $table->string('lauk_dua');
            $table->string('sayur');
            $table->string('buah');
            $table->string('komplemen')->nullable();
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
        Schema::dropIfExists('menus');
    }
};
