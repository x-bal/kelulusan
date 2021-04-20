<?php

namespace App\Http\Controllers;

use App\{Nilai, Siswa};
use App\Http\Requests\NilaiRequest;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('nilai')->get();
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

        $nilai = $input['pabp'] + $input['ppkn'] + $input['bs'] + $input['fisika'] + $input['bind'] + $input['mtk'] + $input['btaq'] + $input['kimia'] + $input['si'] + $input['bing'] + $input['plh'] + $input['c2'] + $input['sn'] + $input['pjok'] + $input['simdig'] + $input['c2'];

        $input['rata'] = $nilai / 16;

        Nilai::updateOrCreate(
            [
                'siswa_id'   => $id,
            ],
            $input
        );

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diinput');
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
