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
        Schema::create('perizinans', function (Blueprint $table) {
            $table->id();
            $table->enum('tipeizin',['pesiar','bermalam','keluar']);
            $table->date('tanggal_mulai');
            $table->time('jam_mulai');
            $table->date('tanggal_selesai');
            $table->time('jam_selesai');
            $table->string('alamat_tujuan');
            $table->string('alasan');
            $table->boolean('isApproved');
            $table->boolean('isDiuangkan');
            $table->boolean('isDikurangi');
            $table->boolean('isDibox');
            $table->boolean('isDone');
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
        Schema::dropIfExists('perizinans');
    }
};
