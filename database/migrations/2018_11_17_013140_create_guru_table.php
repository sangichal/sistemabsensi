<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->integer('NIK');
            $table->timestamps();
            $table->string('Nama');
            $table->string('password');
            $table->string('Tpt_Lahir');
            $table->date('Tgl_Lahir');
            $table->string('Agama');
            $table->string('JnsKel');
            $table->text('Alamat');
            $table->string('Pendidikan');
            $table->string('Email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
}
