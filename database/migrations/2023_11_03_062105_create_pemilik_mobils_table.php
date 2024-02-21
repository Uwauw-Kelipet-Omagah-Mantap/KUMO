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
        Schema::create('pemilik_mobil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pemilik_mobil', true);
            $table->string('username')->nullable(false);
            $table->string('nama_pemilik', 50)->nullable(false);
            $table->text('alamat_pemilik')->nullable(false);
            $table->string('nomor_telepon_pemilik', 15)->nullable(false);
            $table->string('foto_ktp_pemilik', 50)->nullable(false);
            $table->string('foto_profil_pemilik', 50)->nullable(false);
            $table->timestamps();
            //FK AKUN
            $table->foreign('username')->references('username')->on('akun')
                    ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilik_mobil');
    }
};
