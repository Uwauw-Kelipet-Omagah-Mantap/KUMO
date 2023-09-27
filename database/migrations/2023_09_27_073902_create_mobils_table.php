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
            $table->id('id_mobil');
            $table->unsignedBigInteger('id_pemilik_mobil');
            $table->string('merk', 50);
            $table->string('model', 50);
            $table->string('status', 50);
            $table->string('foto', 50);

            $table->foreign('id_pemilik_mobil')->references('id_pemilik_mobil')->on('pemilik_mobil')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
