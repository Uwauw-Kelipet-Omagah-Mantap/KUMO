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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->string('id_pengembalian')->primary();
            $table->string('id_pemeriksaan');
            $table->text('tempat_pengembalian')->nullable(false);
            $table->datetime('waktu_pengembalian')->nullable(false);
            $table->timestamps();
            //FK PEMERIKSAAN
            $table->foreign('id_pemeriksaan')->references('id_pemeriksaan')->on('laporan_pemeriksaan')
            ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian');
    }
};
