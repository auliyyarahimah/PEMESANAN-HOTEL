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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->increments('id_reservasi');
            $table->unsignedInteger('customer_id');
            $table->date('tanggal');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->unsignedInteger('id_hotel');

            $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete('cascade');
            $table->foreign('id_hotel')->references('id_hotel')->on('Harga_Hari_Ini')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
