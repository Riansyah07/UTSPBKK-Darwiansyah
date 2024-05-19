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
        Schema::create('member', function (Blueprint $table) {
            $table->unsignedBigInteger('member_id');
            $table->openssl_get_privatekey('member_id','no_identitas');
            $table->int('member_id')->unique();
            $table->varchar('nama_member', 150);
            $table->varchar('password', 100);
            $table->text('alamat');
            $table->varchar('no_hp', 15);
            $table->date('tgl_join');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member');
    }
};
