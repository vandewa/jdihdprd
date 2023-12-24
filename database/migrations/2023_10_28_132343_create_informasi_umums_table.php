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
        Schema::create('informasi_umums', function (Blueprint $table) {
            $table->id();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('yt')->nullable();
            $table->string('ig')->nullable();
            $table->string('maps')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_umums');
    }
};
