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
        Schema::create('berlaku', function (Blueprint $table) {
            $table->string('id_berlaku')->primary();
            $table->string('id_denda')->nullable(false);
            $table->string('id_pemeriksaan')->nullable(false);
            $table->timestamps();
            //FK DENDA
            $table->foreign('id_denda')->references('id_denda')->on('denda')
                    ->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('berlaku');
    }
};
