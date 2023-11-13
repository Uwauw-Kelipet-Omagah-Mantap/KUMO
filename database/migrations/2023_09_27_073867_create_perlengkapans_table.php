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
        Schema::create('perlengkapan', function (Blueprint $table) {
            $table->string('id_perlengkapan')->primary();
            $table->string('id_mobil')->nullable(false);
            $table->string('nama_perlengkapan', 25)->nullable(false);
            $table->datetime('tanggal_perlengkapan')->nullable(false);
            $table->text('deskripsi_perlengkapan')->nullable(false);
            $table->enum('status_perlengkapan', [
                'lengkap',
                'ada_kerusakan',
                'ada_barang_hilang'
            ]);
            $table->string('foto_perlengkapan', 50)->nullable(false);
            $table->timestamps();
            //FK MOBIL
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')
            ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perlengkapan');
    }
};
