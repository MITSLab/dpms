<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubklasifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subklasifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('klasifikasi')
                  ->comment('ex: harta, asset');
            $table->string('subklasifikasi')
                  ->comment('ex: kas, bank')
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
        Schema::dropIfExists('subklasifikasi');
    }
}
