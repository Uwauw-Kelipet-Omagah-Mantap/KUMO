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
        Schema::create('admin', function (Blueprint $table) {
            $table->string('id_admin')->primary();
            $table->string('id_perusahaan')->nullable(false);
            $table->string('nama_admin', 50)->nullable(false);
            $table->timestamps();
            //FK
            $table->foreign('id_perusahaan')->references('id_perusahaan')->on('perusahaan')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
