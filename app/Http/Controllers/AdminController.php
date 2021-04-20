<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admin = User::where('level', 'admin')->get();
        return view('admin.index', compact('admin'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(AdminRequest $request)
    {
        $request['level'] = 'admin';
        $request['status'] = 1;
        $request['password'] = Hash::make('admin2021');

        User::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan');
    }

    public function show($id)
    {
        $admin = User::find($id);

        return view('admin.show', compact('admin'));
    }

    public function edit($id)
    {
        $admin = User::find($id);
        return view('admin.edit', compact('admin'));
    }

    public function update($id)
    {
        $admin = User::find($id);

        request()->validate([
            'username' => 'unique:users,username,' . $admin->id,
            'name' => 'required'
        ]);

        $admin->update(request()->all());

        return redirect()->route('admin.index')->with('success', 'Admin berhasil diupdate');
    }

    public function destroy($id)
    {
        $admin = User::find($id);

        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin berhasil dihapus');
    }
}
