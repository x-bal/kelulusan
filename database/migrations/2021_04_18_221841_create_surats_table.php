<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('header');
            $table->string('sub_header');
            $table->string('dinas');
            $table->string('no_surat');
            $table->string('nama_surat');
            $table->string('tahun_ajaran');
            $table->string('alamat');
            $table->string('tempat_tanggal_surat');
            $table->string('kepala_sekolah');
            $table->string('ttd');
            $table->string('stempel');
            $table->bigInteger('nip');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
