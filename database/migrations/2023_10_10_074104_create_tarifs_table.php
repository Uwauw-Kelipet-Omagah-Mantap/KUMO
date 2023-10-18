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
        Schema::create('tarif', function (Blueprint $table) {
            $table->id('id_tarif');
            $table->unsignedBigInteger('id_mobil');
            $table->unsignedBigInteger('id_model_mobil');
            $table->integer('durasi_tarif')->nullable(false);
            $table->integer('nominal')->nullable(false);
            $table->timestamps();
            //FK ID MOBIL
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')
                    ->cascadeOnDelete()->cascadeOnUpdate();
            //FK ID MODEL MOBIL
            $table->foreign('id_model_mobil')->references('id_model_mobil')->on('model_mobil')
                    ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarif');
    }
};
