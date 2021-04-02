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
        Schema::create('toko', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('telepon')
                  ->nullable();
            $table->string('nomor_wa')
                  ->nullable();
            $table->string('nama_pemilik');
            $table->string('nama_toko');
            $table->text('tentang')
                  ->nullable();
            $table->text('alamat')
                  ->nullable();
            $table->string('kode_pos')
                  ->nullable();
            $table->string('kota')
                  ->nullable();
            $table->string('path_logo_tab')
                  ->nullable();
            $table->string('path_logo_login')
                  ->nullable();
            $table->string('path_logo_admin')
                  ->nullable();
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
        Schema::dropIfExists('toko');
    }
}
