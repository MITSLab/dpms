<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArusKasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arus_kas', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->date('tanggal')
                  ->default(now());
            $table->string('keterangan')
                  ->nullable();
            $table->float('masuk')
                  ->default(0);
            $table->float('keluar')
                  ->default(0);
            $table->float('saldo')
                  ->default(0);
            $table->foreignId('kas_id');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('arus_kas');
    }
}
