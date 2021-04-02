<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('nama')->after('id');
            $table->string('username')->unique()->after('nama');
            $table->string('telepon')->after('remember_token');
            $table->text('alamat')->after('telepon');
            $table->string('kode_pos')->after('alamat');
            $table->string('kota')->after('kode_pos');
            $table->string('path_foto')->after('kota');
            $table->foreignId('role_id')->after('path_foto');
            $table->foreignId('kategori_user_id')->after('role_id');
            $table->boolean('is_active')->after('kategori_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
