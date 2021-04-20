<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    public function index()
    {
        $guru = User::where('level', 'guru')->get();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(AdminRequest $request)
    {
        $request['level'] = 'guru';
        $request['status'] = 1;
        $request['password'] = Hash::make('guru2021');

        User::create($request->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan');
    }

    public function show($id)
    {
        $guru = User::find($id);

        return view('guru.show', compact('guru'));
    }

    public function edit($id)
    {
        $guru = User::find($id);
        return view('guru.edit', compact('guru'));
    }

    public function update($id)
    {
        $guru = User::find($id);

        request()->validate([
            'username' => 'unique:users,username,' . $guru->id,
            'name' => 'required'
        ]);

        $guru->update(request()->all());

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diupdate');
    }

    public function destroy($id)
    {
        $guru = User::find($id);

        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus');
    }
}
