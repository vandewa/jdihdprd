<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk_hukums', function (Blueprint $table) {
            $table->id();
            $table->integer('kategori_id')->nullable();
            $table->integer('nomor')->nullable();
            $table->integer('tahun')->nullable();
            $table->text('tentang')->nullable();
            $table->text('qrcode')->nullable();
            $table->string('abstrak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_hukums');
    }
};
