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
        Schema::create('junction_table', function (Blueprint $table) {
            $table->id('id_jt');
            $table->unsignedBigInteger('id_denda');
            $table->unsignedBigInteger('id_pemeriksaan');
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
        Schema::dropIfExists('junction_table');
    }
};
