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
            $table->id('id_pemeriksaan');
            $table->unsignedBigInteger('id_perlengkapan');
            $table->text('deskripsi_pemeriksaan')->nullable(false);
            $table->enum('status_perlengkapan', [
                                                    'menunggu',
                                                    'dalam_proses',
                                                    'selesai',   
                                                ]);
            $table->string('foto_pemeriksaan')->nullable(false);
            $table->timestamps();
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
