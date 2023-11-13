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
        Schema::create('denda', function (Blueprint $table) {
            $table->string('id_denda')->primary();
            $table->enum('jenis_denda', [
                                            'denda_perlengkapan_hilang',
                                            'denda_kerusakan'
            ])->nullable(false);
            $table->unsignedBigInteger('nominal')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denda');
    }
};
