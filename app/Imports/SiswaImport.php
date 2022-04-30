<?php

namespace App\Imports;

use App\{Siswa, User};
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToCollection, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $user = User::create([
                'username' => $row['nis'],
                'name' => $row['name'],
                'password' => Hash::make($row['password']),
                'level' => 'siswa',
                'status' => 0
            ]);

            $user->siswa()->create([
                'nis' => $row['nis'],
                'nisn' => $row['nisn'],
                'nama' => $row['name'],
                'nopes' => $row['nopes'],
                'kelas' => $row['kelas'],
                'jurusan' => $row['jurusan'],
                'tempat' => $row['tempat'],
                'tgl_lahir' => $row['tanggal'],
                'status' => 1,
                'thn_lulus' => $row['lulus']
            ]);
        }
    }
}
