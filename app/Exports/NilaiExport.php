<?php

namespace App\Exports;

use App\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NilaiExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        if (request('thn')) {
            $siswa = Siswa::with('nilai', 'user')->where('thn_lulus', request('thn'))->get();
            if (request('thn') == 'semua') {
                $siswa = Siswa::with('nilai', 'user')->get();
            }
        } else {
            $siswa = Siswa::with('nilai', 'user')->get();
        }

        return view('nilai.export', [
            'siswas' => $siswa
        ]);
    }
}
