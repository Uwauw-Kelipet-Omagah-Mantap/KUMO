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
        Schema::create('pemilik_mobil', function (Blueprint $table) {
            $table->id('id_pemilik_mobil');
            $table->string('nama', 50);
            $table->text('alamat');
            $table->string('nomor_telepon', 15);
            $table->date('tanggal_lahir');
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('foto_ktp', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilik_mobils');
    }
};
