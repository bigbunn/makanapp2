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
            $table->UnsignedBigInteger('user_id');
            $table->enum('tipe_izin',['pesiar','bermalam','keluar']);
            $table->date('tanggal_mulai');
            $table->time('jam_mulai');
            $table->date('tanggal_selesai');
            $table->time('jam_selesai');
            $table->string('alamat');
            $table->string('alasan');
            $table->boolean('isApproved')->default(false);
            $table->boolean('isDiuangkan')->default(false);
            $table->boolean('isDikurangi')->default(false);
            $table->boolean('isDibox')->default(false);
            $table->boolean('isDone')->default(false);
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
