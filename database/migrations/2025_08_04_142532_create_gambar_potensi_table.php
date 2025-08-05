<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gambar_potensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('potensi_id')->constrained('potensi_desa')->onDelete('cascade');
            $table->string('gambar');
            $table->string('keterangan')->nullable();
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gambar_potensi');
    }
};
