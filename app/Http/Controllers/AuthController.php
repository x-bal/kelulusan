<?php

namespace App\Http\Controllers;

use App\{User, Setting};
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        $setting = Setting::where('status', 1)->first();
        return view('auth.login', compact('setting'));
    }

    public function login()
    {
        $data = request()->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );

        // $date = date('YmdHis');
        $date = date('Y-m-d H:i:s');
        $setting = Setting::where('status', 1)->first();
        // $time = Carbon::parse($setting->waktu);
        // $waktu = $time->format('YmdHis');

        Auth::attempt($data);
        if (Auth::check($data)) {
            if (auth()->user()->level == 'siswa') {
                if ($setting > 0) {
                    if ($date >= $setting->waktu) {
                        return redirect()->route('home')->with('success', 'Login berhasil');
                    } else {
                        return $this->logout()->with('error-log', 'Mohon maaf anda belum diperbolehkan login');
                    }
                } else {
                    return $this->logout()->with('error-log', 'Mohon maaf anda belum diperbolehkan login');
                }
            } else {
                return redirect()->route('dashboard')->with('success', 'Login berhasil');
            }
        } else {
            return redirect('/')->with('error-log', 'Username atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
