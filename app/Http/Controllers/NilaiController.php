<?php

namespace App\Http\Controllers;

use App\{Nilai, Siswa};
use App\Exports\NilaiExport;
use App\Http\Requests\NilaiRequest;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NilaiController extends Controller
{
    public function index()
    {
        if (request('thn')) {
            $siswa = Siswa::with('nilai')->where('thn_lulus', request('thn'))->get();
            if (request('thn') == 'semua') {
                $siswa = Siswa::with('nilai')->get();
            }
        } else {
            $siswa = Siswa::with('nilai')->get();
        }
        return view('nilai.index', compact('siswa'));
    }

    public function input($id)
    {
        $siswa = Siswa::find($id);
        return view('nilai.create', compact('siswa'));
    }

    public function insert($id)
    {
        $input = request()->all();
        $input['siswa_id'] = $id;

        $nilai = $input['pabp'] + $input['ppkn'] + $input['bind'] + $input['mtk'] + $input['si'] + $input['bing'] + $input['sn'] + $input['pjok'] + $input['bs'] + $input['fisika'] + $input['kimia'] + $input['plh'] + $input['c2'] + $input['c3'];

        $input['rata'] = $nilai / 14;

        Nilai::updateOrCreate(
            [
                'siswa_id'   => $id,
            ],
            $input
        );

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diinput');
    }

    public function export()
    {
        return Excel::download(new NilaiExport, 'Nilai-SKL-' . request('thn') . '.xlsx');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Nilai $nilai)
    {
        //
    }

    public function edit(Nilai $nilai)
    {
        //
    }

    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    public function destroy(Nilai $nilai)
    {
        //
    }
}
