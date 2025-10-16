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
        Schema::create('gejala_penyakits', function (Blueprint $table) {
            $table->id();
            $table->string('kode_gejala')->nullable();
            $table->text('nama_gejala')->nullable();
            $table->string('nama_penyakit')->nullable();
            $table->double('bobot', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gejala_penyakits');
    }
};
