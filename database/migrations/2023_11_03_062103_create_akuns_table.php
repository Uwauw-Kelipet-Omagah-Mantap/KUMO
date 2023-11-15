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
        Schema::create('akun', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->string('id_admin')->nullable(false);
            $table->string('id_pelanggan')->nullable(false);
            $table->string('id_pemilik')->nullable(false);
            $table->string('password')->nullable(false);
            $table->enum('role', [
                'admin',
                'pelanggan',
                'pemilik_mobil'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akun');
    }
};
