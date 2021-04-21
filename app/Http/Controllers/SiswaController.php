<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaRequest;
use App\{Nilai, Siswa, Surat, User};
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

set_time_limit(300);

class SiswaController extends Controller
{
    public function index()
    {
        if (request('thn')) {
            $siswa = Siswa::where('thn_lulus', request('thn'))->get();
            if (request('thn') == 'semua') {
                $siswa = Siswa::get();
            }
        } else {
            $siswa = Siswa::get();
        }
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(SiswaRequest $request)
    {
        $user = User::create([
            'username' => $request->nisn,
            'name' => $request->nama,
            'password' => Hash::make('smk2021'),
            'level' => 'siswa',
            'status' => 1
        ]);

        $request['status'] = 0;

        $user->siswa()->create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil ditambahkan');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }


    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    public function update(SiswaRequest $request, Siswa $siswa)
    {
        $user = User::find($siswa->user_id);
        $user->update([
            'username' => $request->nisn,
            'name' => $request->nama,
            'password' => Hash::make('smk2021'),
            'level' => 'siswa',
            'status' => 0
        ]);

        $request['status'] = 1;

        $user->siswa()->update($request->except('_method', '_token'));

        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil diupdate');
    }

    public function destroy(Siswa $siswa)
    {
        $user = User::find($siswa->user_id);
        $siswa->nilai()->delete();
        $user->siswa()->delete();

        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil dihapus');
    }

    public function import()
    {
        request()->validate([
            'excel' => 'required|mimes:xls,xlsx,csv'
        ]);

        $path = request()->file('excel');

        Excel::import(new SiswaImport, request()->file('excel'));

        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil diimport');
    }

    public function export()
    {
        return (new SiswaExport)->forYear(request('thn_lulus'))->download('Data Siswa Lulusan Tahun ' . request('thn_lulus') . '.xlsx');
    }

    public function status(Siswa $siswa)
    {
        request()->validate([
            'status' => 'required'
        ]);

        $siswa->update([
            'status' => request('status')
        ]);

        return redirect()->route('siswa.index')->with('success', 'Status Siswa berhasil diubah');
    }

    public function get(Siswa $siswa)
    {
        return response($siswa);
    }

    public function print(Siswa $siswa)
    {
        $nilai = Siswa::with('nilai')->findOrFail($siswa->id);
        $surat = Surat::where('status', 1)->first();

        // return view('siswa.nilai', compact('nilai', 'surat'));
        // $pdf = PDF::loadView('siswa.nilai', ['nilai' => $nilai, 'surat' => $surat]);
        $pdf = PDF::loadView('siswa.nilai', ['nilai' => $nilai, 'surat' => $surat])->setPaper('a4', 'potrait');
        return $pdf->download('Surat Keterangan Lulus - ' . $siswa->nama . '.pdf');
    }
}
