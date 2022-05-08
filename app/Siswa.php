<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = ['nis', 'nisn', 'nama', 'nopes', 'kelas', 'jurusan', 'tempat', 'tgl_lahir', 'keterangan', 'status', 'user_id', 'thn_lulus', 'no_skl', 'ortu'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nilai()
    {
        return $this->hasOne(Nilai::class);
    }
}
