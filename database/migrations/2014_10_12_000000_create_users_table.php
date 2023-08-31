<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('tempat_tanggalLahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('Asal_Sekolah')->nullable();
            $table->string('Alamat_Sekolah')->nullable();
            $table->string('Program_Keahlihan')->nullable();
            $table->string('Nomor_Induk')->nullable();
            $table->string('Alamat_Rumah')->nullable();
            $table->string('notelp_Pribadi')->nullable();
            $table->string('notelp_OrangTua')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
