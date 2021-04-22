<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nis', 20);
            $table->string('nisn', 20);
            $table->string('nama');
            $table->string('nopes', 50);
            $table->string('kelas', 20);
            $table->string('jurusan', 30);
            $table->string('tempat', 50);
            $table->string('tgl_lahir', 25);
            $table->string('keterangan', 30)->nullable();
            $table->integer('thn_lulus');
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
        Schema::dropIfExists('siswas');
    }
}
