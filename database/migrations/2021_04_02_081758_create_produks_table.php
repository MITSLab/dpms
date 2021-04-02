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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->integer('stok')
                  ->default(0);
            $table->integer('stok_min')
                  ->default(0);
            $table->bigInteger('panjang')
                  ->default(0)
                  ->comment('cm');
            $table->bigInteger('lebar')
                  ->default(0)
                  ->comment('cm');
            $table->float('harga_beli')
                  ->default(0);
            $table->float('harga_jual')
                  ->default(0);
            $table->string('path_foto')
                  ->nullable();
            $table->foreignId('supplier_id');
            $table->foreignId('kategori_produk_id');
            $table->foreignId('uom_id');
            $table->boolean('is_active')
                  ->default(1);
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
        Schema::dropIfExists('produk');
    }
}
