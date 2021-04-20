<?php

namespace App\Http\Controllers;

use App\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::get();
        return view('setting.index', compact('settings'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'waktu' => 'required'
            ],
            [
                'waktu.required' => 'Pilih Waktu'
            ]
        );

        Setting::create([
            'waktu' => request('waktu'),
            'status' => 0
        ]);

        return redirect()->route('setting.index')->with('success', 'Setting berhasil ditambahkan');
    }

    public function show(Setting $setting)
    {
        //
    }

    public function edit(Setting $setting)
    {
        //
    }

    public function update(Request $request, Setting $setting)
    {
        //
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('setting.index')->with('success', 'Setting berhasil dihapus');
    }

    public function get(Setting $setting)
    {
        return response($setting);
    }

    public function status(Setting $setting)
    {
        DB::table('setting')->where('status', '=', 1)->update(['status' => 0]);

        $setting->update([
            'status' => request('status')
        ]);

        return redirect()->route('setting.index')->with('success', 'Status setting berhasil diubah');
    }
}
