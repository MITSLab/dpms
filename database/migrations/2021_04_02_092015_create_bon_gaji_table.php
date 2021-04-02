<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_gaji', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gaji_id');
            $table->foreignId('bon_id');
            $table->string('kode');
            $table->date('tanggal')
                  ->default(now());
            $table->float('nominal')
                  ->default(0);
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
        Schema::dropIfExists('bon_gaji');
    }
}
