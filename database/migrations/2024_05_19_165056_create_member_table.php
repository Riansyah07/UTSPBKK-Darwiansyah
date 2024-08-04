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
            $table->bigIncrements('member_id');
            $table->string('no_identitas', 16)->unique();
            $table->string('nama_member', 150);
            $table->string('password', 100);
            $table->text('alamat');
            $table->string('no_hp', 15);
            $table->date('tgl_join');
            $table->timestamps();
            $table->primary(['member_id', 'no_identitas']);
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
