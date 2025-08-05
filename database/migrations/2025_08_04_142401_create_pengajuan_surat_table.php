<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengajuan_surat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_id');
            $table->unsignedBigInteger('warga_id');
            $table->string('nomor_pengajuan')->unique();
            $table->text('data_pengajuan');
            $table->string('status')->default('menunggu');
            $table->text('catatan')->nullable();
            $table->string('surat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('pengajuan_surat', function (Blueprint $table) {
            $table->foreign('layanan_id')->references('id')->on('layanan_publik');
            $table->foreign('warga_id')->references('id')->on('warga');
        });
    }
};
