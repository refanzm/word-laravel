<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $table = 'bantuan';
    use HasFactory;

    protected $fillable = [
        'email',
        'tempat',
        'nomor',
        'nama_organisasi',
        'nama_pemohon',
        'tanggal_lahir_pemohon',
        'jenis_kelamin_pemohon',
        'agama_pemohon',
        'pendidikan_pemohon',
        'golongan_darah_pemohon',
        'alamat_pemohon',
        'pekerjaan_pemohon',
        'keterangan_1',
    ];

    protected $hidden;
}
