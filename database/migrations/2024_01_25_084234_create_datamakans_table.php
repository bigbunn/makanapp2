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
        Schema::create('datamakans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('ruang_makan_sahur')->nullable();
            $table->integer('ruang_makan_pagi');
            $table->integer('ruang_makan_pagi_snack');
            $table->integer('ruang_makan_siang');
            $table->integer('ruang_makan_malam');
            $table->integer('ruang_makan_malam_snack');
            $table->integer('ruang_makan_takjil')->nullable();
            $table->integer('sampataloka_sahur')->nullable();
            $table->integer('sampataloka_pagi');
            $table->integer('sampataloka_pagi_snack');
            $table->integer('sampataloka_siang');
            $table->integer('sampataloka_malam');
            $table->integer('sampataloka_malam_snack');
            $table->integer('sampataloka_takjil')->nullable();
            $table->boolean('is_puasa');
            $table->boolean('is_approved');
            $table->boolean('is_include_tambahan');
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
        Schema::dropIfExists('datamakans');
    }
};
