<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('potensi_desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('kategori'); // wisata, umkm, pertanian, dll
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->string('pemilik')->nullable();
            $table->string('kontak')->nullable();
            $table->string('foto_utama');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('potensi_desa');
    }
};
