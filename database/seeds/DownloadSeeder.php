<?php

use App\Download;
use Illuminate\Database\Seeder;

class DownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Download::create([
            'status' => 0
        ]);
    }
}
