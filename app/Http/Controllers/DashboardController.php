<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function home()
    {
        return view('dashboard.home');
    }

    public function profile()
    {
        $id = auth()->user()->id;

        $user = User::find($id);
        return view('dashboard.profile', compact('user'));
    }

    public function update(User $user)
    {
        request()->validate(
            [
                'username' => 'required|unique:users,username,' . $user->id,
                'name' => 'required'
            ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'name.required' => 'Nama tidak boleh kosong',
                'username.unique' => 'Username tidak tersedia'
            ]
        );

        $attr = request()->all();
        if (request('password')) {
            $attr['password'] = Hash::make(request('password'));
        } else {
            $attr['password'] = $user->password;
        }

        $user->update($attr);
        return redirect()->route('dashboard')->with('success', 'Profile berhasil diupdate');
    }
}
