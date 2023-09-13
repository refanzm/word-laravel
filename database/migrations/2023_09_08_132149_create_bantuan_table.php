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
        Schema::create('bantuan', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('tempat');
            $table->string('nomor');
            $table->string('nama_organisasi');
            $table->string('nama_pemohon');
            $table->string('tanggal_lahir_pemohon');
            $table->string('jenis_kelamin_pemohon');
            $table->string('agama_pemohon');
            $table->string('pendidikan_pemohon');
            $table->string('golongan_darah_pemohon');
            $table->string('alamat_pemohon');
            $table->string('pekerjaan_pemohon');
            $table->string('keterangan_1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bantuan');
    }
};
