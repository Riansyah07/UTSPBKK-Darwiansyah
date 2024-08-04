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
        Schema::create('pembelian_barang', function (Blueprint $table) {
            $table->bigIncrements('id_pembelian');
            $table->string('kode_barang');
            $table->unsignedBigInteger('id_pegawai');
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->timestamps();

            $table->primary(['id_pembelian', 'kode_barang']);
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_barang');
    }
};
