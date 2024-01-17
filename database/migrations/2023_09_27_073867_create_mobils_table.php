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
        Schema::create('mobil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_mobil', true);
            $table->unsignedBigInteger('id_pemilik_mobil')->nullable(false);
            $table->unsignedBigInteger('id_model_mobil', false)->nullable();
            // $table->string('no_polisi', 10)->nullable(false);
            // $table->enum('status_mobil', [
            //                                 'tersedia',
            //                                 'sedang disewa'
            //                             ])->nullable(false);
            // $table->string('foto_stnk', 50)->nullable(false);
            $table->string('foto_mobil', 50)->nullable(false);
            $table->integer('harga_mobil')->nullable(false);
            $table->timestamps();
            //FK PEMILIK MOBIL
            $table->foreign('id_pemilik_mobil')->references('id_pemilik_mobil')->on('pemilik_mobil')
                    ->cascadeOnDelete()->cascadeOnUpdate();
            //FK MODEL MOBIL
            $table->foreign('id_model_mobil')->references('id_model_mobil')->on('model_mobil')
                    ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
