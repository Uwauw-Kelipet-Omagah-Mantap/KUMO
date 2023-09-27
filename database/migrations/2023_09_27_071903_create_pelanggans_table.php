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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('id_pelanggan');
            $table->string('nama',255)->nullable(false);
            $table->text('alamat');
            $table->string('nomor_telepon',15)->nullable(false);
            $table->date('tanggal_lahir');
            $table->string('email',50)->nullable(false);
            $table->string('password',50)->nullable(false);
            $table->string('foto_ktp',50)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
