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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->string('id_perusahaan')->primary();
            $table->string('nama_perusahaan',50)->nullable(false);
            $table->text('alamat_perusahaan')->nullable(false);
            $table->unsignedBigInteger('nomor_telepon_perusahaan')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
