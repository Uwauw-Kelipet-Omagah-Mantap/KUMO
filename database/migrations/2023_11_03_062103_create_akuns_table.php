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
            $table->string('id_pemilik_mobil')->nullable(false);
            $table->string('password')->nullable(false);
            $table->enum('role', [
                'admin',
                'pelanggan',
                'pemilik_mobil'
            ]);
            $table->timestamps();
            //FK ADMIN
            $table->foreign('id_admin')->references('id_admin')->on('admin')
                    ->cascadeOnDelete()->cascadeOnUpdate();
            //FK PELANGGAN
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')
                    ->cascadeOnDelete()->cascadeOnUpdate();
            //FK PEMILIK MOBIL
            $table->foreign('id_pemilik_mobil')->references('id_pemilik_mobil')->on('pemilik_mobil')
                ->cascadeOnDelete()->cascadeOnUpdate();
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
