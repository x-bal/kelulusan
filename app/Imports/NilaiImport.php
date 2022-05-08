<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NilaiImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        $i = 1;
        foreach ($rows as $row) {
            $user = User::updateOrCreate(
                [
                    'username' => $row['username'],
                ],
                [
                    'name' => $row['nama_siswa'],
                    'password' => bcrypt('smanev2022'),
                    'level' => 'siswa',
                    'status' => 0
                ]
            );

            $ttl = explode(',', $row['tempat_tgl_lahir']);
            // dd($row['nis']);
            $siswa = $user->siswa()->updateOrCreate(
                [
                    'nis' => $row['nis'],
                    'nisn' => $row['nisn'],
                ],
                [
                    'nama' => $row['nama_siswa'],
                    'tempat' => $ttl[0],
                    'tgl_lahir' => $ttl[1],
                    'no_skl' => $row['no_skl'],
                    'ortu' => $row['nama_ayah'],
                    'thn_lulus' => $row['thn_lulus'],
                    'jurusan' => $row['jurusan'] == 'IPA' ? 'ipa' : 'ips'
                ]
            );

            // dd($row);

            $nilai = $row['pend_agama'] + $row['pkn'] + $row['bindo'] + $row['mtk'] + $row['sej_indo'] + $row['basing'] + $row['sen_bud'] + $row['pjs'] + $row['prakarya'] + $row['fis_eko'] + $row['kim_sos'] + $row['bio_geo'] + $row['mtkipa_sej'] + $row['lintas_minat'];

            $rata = $nilai / 14;

            $siswa->nilai()->updateOrCreate(
                [
                    'siswa_id' => $siswa->id
                ],
                [
                    'pabp' => $row['pend_agama'],
                    'ppkn' => $row['pkn'],
                    'bind' => $row['bindo'],
                    'bing' => $row['basing'],
                    'mtk' => $row['mtk'],
                    'fisika' => $row['fis_eko'],
                    'kimia' => $row['kim_sos'],
                    'plh' => $row['bio_geo'],
                    'c2' => $row['mtkipa_sej'],
                    'sn' => $row['sen_bud'],
                    'pjok' => $row['pjs'],
                    'si' => $row['sej_indo'],
                    'bs' => $row['prakarya'],
                    'c3' => $row['lintas_minat'],
                    'rata' => $rata,
                ]
            );
        }
    }
}
