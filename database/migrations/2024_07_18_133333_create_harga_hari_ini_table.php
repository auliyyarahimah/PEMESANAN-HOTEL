<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('harga_hari_ini', function (Blueprint $table) {
            $table->increments('id_hotel');
            $table->integer('harga');
            $table->integer('available_room');
            $table->date('tanggal');
            $table->unsignedInteger('id_kamar');

            $table->foreign('id_kamar')->references('id_kamar')->on('kamar')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_hari_ini');
    }
};
