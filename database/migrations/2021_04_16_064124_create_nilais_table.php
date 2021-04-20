<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id');
            $table->double('pabp')->nullable();
            $table->double('ppkn')->nullable();
            $table->double('bind')->nullable();
            $table->double('mtk')->nullable();
            $table->double('si')->nullable();
            $table->double('bing')->nullable();
            $table->double('sn')->nullable();
            $table->double('pjok')->nullable();
            $table->double('bs')->nullable();
            $table->double('btaq')->nullable();
            $table->double('plh')->nullable();
            $table->double('simdig')->nullable();
            $table->double('fisika')->nullable();
            $table->double('kimia')->nullable();
            $table->double('c2')->nullable();
            $table->double('c3')->nullable();
            $table->double('rata', 11, 2)->nullable();
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
        Schema::dropIfExists('nilais');
    }
}
