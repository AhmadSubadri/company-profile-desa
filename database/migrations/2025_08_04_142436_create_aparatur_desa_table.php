<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('aparatur_desa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warga_id')->nullable()->constrained('warga');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('foto')->nullable();
            $table->text('tugas')->nullable();
            $table->string('pendidikan')->nullable();
            $table->date('mulai_jabatan');
            $table->date('akhir_jabatan')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('urutan')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aparatur_desa');
    }
};
