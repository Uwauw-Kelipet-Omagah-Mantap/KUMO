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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('id_pelanggan');
            $table->string('nama_pelanggan',255)->nullable(false);
            $table->text('alamat_pelanggan')->nullable(false);
            $table->string('nomor_telepon_pelanggan',15)->nullable(false);
            $table->string('foto_ktp_pelanggan',50)->nullable(false);
            $table->string('foto_sim',50)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
