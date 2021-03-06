<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->date('tanggal')
                  ->default(now());
            $table->foreignId('kontak_id');
            $table->float('total_bayar')
                  ->default(0);
            $table->float('sisa')
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
        Schema::dropIfExists('bon');
    }
}
