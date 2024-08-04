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
        if (Schema::hasTable('data_laundry_member')) {
            Schema::drop('data_laundry_member');
        }

        Schema::create('data_laundry_member', function (Blueprint $table) {
            $table->bigIncrements('no_transaksi');
            $table->date('tgl_transaksi');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('id_pegawai');
            $table->text('keterangan');
            $table->enum('status_laundry', ['menunggu', 'diproses', 'selesai']);
            $table->enum('status_pembayaran', ['bayar', 'belum']);
            $table->text('lokasi_kirim');
            $table->timestamps();

            $table->foreign('member_id')->references('member_id')->on('member');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_laundry_member');
    }
};
