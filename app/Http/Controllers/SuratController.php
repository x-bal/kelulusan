<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratRequest;
use App\Surat;
use Faker\Provider\Uuid;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::get();
        return view('surat.index', compact('surat'));
    }

    public function create()
    {
        return view('surat.create');
    }

    public function store(SuratRequest $request)
    {
        $logo = $request->file('logo');
        $logoUrl = $logo->store('images/logo');

        $ttd = $request->file('ttd');
        $ttdUrl = $ttd->store('images/ttd');

        $stempel = $request->file('stempel');
        $stempelUrl = $stempel->store('images/stempel');

        // $request['status'] = 0;
        $input = $request->all();
        $input['status'] = 0;
        $input['logo'] = $logoUrl;
        $input['ttd'] = $ttdUrl;
        $input['stempel'] = $stempelUrl;


        Surat::create($input);

        return redirect()->route('surat.index')->with('success', 'Surat berhasil dibuat');
    }

    public function show(Surat $surat)
    {
        //
    }

    public function edit(Surat $surat)
    {
        return view('surat.edit', compact('surat'));
    }

    public function update(Surat $surat)
    {
        request()->validate(
            [
                'no_surat' => 'required',
                'header' => 'required',
                'sub_header' => 'required',
                'dinas' => 'required',
                'alamat' => 'required',
            ],
            [
                'no_surat.required' => 'No Surat tidak boleh kosong',
                'header.required' => 'Header tidak boleh kosong',
                'sub_header.required' => 'Sub Header Surat tidak boleh kosong',
                'dinas.required' => 'Nama Dinas tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong',
            ]
        );

        $input = request()->all();

        if (request()->file('logo')) {
            Storage::delete($surat->logo);
            $logo =  request()->file('logo')->store('images/logo');
        } else {
            $logo = $surat->logo;
        }

        $input['logo'] = $logo;

        $surat->update($input);
        return redirect()->route('surat.index')->with('success', 'Surat berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        \Storage::delete($surat->logo);
        $surat->delete();

        return redirect()->route('surat.index')->with('success', 'Surat berhasil diupdate');
    }
}
