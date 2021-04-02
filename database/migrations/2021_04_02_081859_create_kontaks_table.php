<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->string('telepon')
                  ->nullable();
            $table->string('kurs')
                  ->nullable()
                  ->default('IDR');
            $table->foreignId('jenis_kontak_id')
                  ->comment('tipe');
            $table->string('jenis')
                  ->comment('lokasi atau wilayah')
                  ->nullable();
            $table->string('klasifikasi')
                  ->nullable();
            $table->string('npwp')
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
        Schema::dropIfExists('kontak');
    }
}
