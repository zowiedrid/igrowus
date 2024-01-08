<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->id('id_pembeli');
            $table->string('nama_pembeli', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('no_telepon', 13);
            $table->string('alamat', 250);
            $table->date('tgl_lahir')->nullable();
            $table->string('jenis_kelamin', 30)->nullable();
            $table->binary('foto_pembeli')->nullable();
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
        Schema::dropIfExists('pembeli');
    }
}
