<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->integer('stok');
            $table->integer('stok_min');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->decimal('harga_beli');
            $table->decimal('harga_jual');
            $table->string('path_foto');
            $table->foreignId('supplier_id');
            $table->foreignId('kategori_produk_id');
            $table->foreignId('uom_id');
            $table->boolean('is_active');
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
        Schema::dropIfExists('produks');
    }
}
