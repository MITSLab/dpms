<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('telepon');
            $table->string('nomor_wa');
            $table->string('nama_pemilik');
            $table->string('nama_toko');
            $table->text('tentang');
            $table->text('alamat');
            $table->string('kode_pos');
            $table->string('kota');
            $table->string('path_logo_tab');
            $table->string('path_logo_login');
            $table->string('path_logo_admin');
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
        Schema::dropIfExists('tokos');
    }
}
