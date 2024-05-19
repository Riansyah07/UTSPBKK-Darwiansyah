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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->unsignedBigInteger('pegawai_id');
            $table->openssl_get_privatekey('id_pegawai');
            $table->int('id_pegawai')->unique();
            $table->varchar('nama_pegawai', 150);
            $table->varchar('password', 100);
            $table->text('alamat');
            $table->text('no_hp');
            $table->enum('jabatan', ['karyawan', 'supervisi','administrator']);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
