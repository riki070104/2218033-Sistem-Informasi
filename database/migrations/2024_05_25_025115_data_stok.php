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
        Schema::create('tb_stok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_gudang')->nullable();
            $table->string('nama_gudang');
            $table->string('nama_sepatu');
            $table->string('merek');
            $table->string('ukuran');
            $table->string('warna');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->timestamps();

            $table->foreign('id_gudang')->references('id')->on('gudangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_stok');
    }
};
