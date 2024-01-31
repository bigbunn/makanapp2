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
        Schema::create('keterangan_datamakans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datamakan_id');
            $table->string('keterangan');
            $table->integer('ruang_makan_sahur')->nullable();
            $table->integer('ruang_makan_pagi')->nullable();
            $table->integer('ruang_makan_pagi_snack')->nullable();
            $table->integer('ruang_makan_siang')->nullable();
            $table->integer('ruang_makan_malam')->nullable();
            $table->integer('ruang_makan_malam_snack')->nullable();
            $table->integer('ruang_makan_takjil')->nullable();
            $table->integer('sampataloka_sahur')->nullable();
            $table->integer('sampataloka_pagi')->nullable();
            $table->integer('sampataloka_pagi_snack')->nullable();
            $table->integer('sampataloka_siang')->nullable();
            $table->integer('sampataloka_malam')->nullable();
            $table->integer('sampataloka_malam_snack')->nullable();
            $table->integer('sampataloka_takjil')->nullable();
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
        Schema::dropIfExists('keterangan_datamakans');
    }
};
