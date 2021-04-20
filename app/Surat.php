<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';

    protected $fillable = ['logo', 'header', 'sub_header', 'dinas', 'no_surat', 'alamat', 'status', 'nama_surat', 'tahun_ajaran', 'tempat_tanggal_surat', 'kepala_sekolah', 'nip', 'ttd', 'stempel'];
}
