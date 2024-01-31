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
        Schema::create('pantangan_datamakans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datamakan_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pantangan');
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
        Schema::dropIfExists('pantangan_datamakans');
    }
};
