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
        Schema::create('model_mobil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_model_mobil', true);
            $table->enum('tipe_mobil', ['sedan', 'suv', 'truck', 'minibus']);
            $table->enum('merk_mobil', [
                                        'toyota', 'daihatsu', 'suzuki', 
                                        'mitsubishi', 'nissan', 'isuzu', 
                                        'bmw', 'mercedes-benz', 'wuling', 
                                        'honda'
                                    ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_mobil');
    }
};
