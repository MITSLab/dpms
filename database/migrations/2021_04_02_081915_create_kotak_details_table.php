<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotakDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotak_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kontak_id');
            $table->text('alamat')
                  ->nullable();
            $table->string('kode_pos')
                  ->nullable();
            $table->string('kota')
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
        Schema::dropIfExists('kotak_detail');
    }
}
