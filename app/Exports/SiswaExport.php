<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class SiswaExport implements FromQuery
{
    use Exportable;

    public function forYear(int $year)
    {
        $this->year = $year;

        return $this;
    }

    public function query()
    {
        return Siswa::query()->where('thn_lulus', $this->year);
    }
}
