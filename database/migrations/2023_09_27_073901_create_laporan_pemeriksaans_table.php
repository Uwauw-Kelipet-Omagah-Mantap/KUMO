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
        Schema::create('laporan_pemeriksaan', function (Blueprint $table) {
            $table->string('id_pemeriksaan')->primary();
            $table->string('id_perlengkapan')->nullable(false);
            $table->text('deskripsi_pemeriksaan')->nullable(false);
            $table->enum('status_pemeriksaan', [
                                                    'menunggu',
                                                    'dalam_proses',
                                                    'selesai',   
                                                ]);
            $table->string('foto_pemeriksaan', 50)->nullable(false);
            $table->timestamps();
            //FK PERLENGKAPAN
            $table->foreign('id_perlengkapan')->references('id_perlengkapan')->on('perlengkapan')
            ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_pemeriksaan');
    }
};
