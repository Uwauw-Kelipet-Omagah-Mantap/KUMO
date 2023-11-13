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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->string('id_ulasan')->primary();
            $table->string('id_mobil')->nullable(false);
            $table->string('id_pelanggan')->nullable(false);
            $table->text('ulasan');
            $table->unsignedTinyInteger('rating');
            $table->timestamps();
            //FK id_mobil
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')
                    ->cascadeOnDelete()->cascadeOnUpdate();
            //FK id_pelanggan
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')
                    ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
