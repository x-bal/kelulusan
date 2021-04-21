<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function status(Download $download)
    {
        $download->update([
            'status' => request('status')
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Fitur Download berhasil diaktifkan'
        ]);
    }
}
