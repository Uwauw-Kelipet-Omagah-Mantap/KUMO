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
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id('id_penyewaan');
            $table->unsignedBigInteger('id_pemilik_mobil');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_mobil');
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_selesai');
            $table->enum('status_pemesanan', [
                'sedang_diantar',
                'sudah_ada_ditujuan',
                'sedang_dalam_masa_penggunaan',
                'dalam_masa_pengembalian',
                'sudah_dikembalikan'
            ]);
            $table->integer('total_biaya');
            $table->enum('status_pembayaran', ['belum_dibayar', 'sudah_dibayar']);
            $table->timestamps();
            //FK PEMILIK MOBIL
            $table->foreign('id_pemilik_mobil')->references('id_pemilik_mobil')->on('pemilik_mobil')
                ->cascadeOnDelete()->cascadeOnUpdate();
            //FK PELANGGAN
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')
                ->cascadeOnDelete()->cascadeOnUpdate();
            //FK MOBIL
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaans');
    }
};
