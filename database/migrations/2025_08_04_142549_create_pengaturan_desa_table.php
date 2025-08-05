<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengaturan_desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->string('kode_desa')->unique();
            $table->string('nama_kecamatan');
            $table->string('kode_kecamatan');
            $table->string('nama_kabupaten');
            $table->string('kode_kabupaten');
            $table->string('provinsi');
            $table->string('alamat_kantor');
            $table->string('telepon');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('kepala_desa');
            $table->string('nip_kepala_desa')->nullable();
            $table->string('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('sejarah')->nullable();
            $table->text('geografis')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengaturan_desa');
    }
};
