<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('registrasi_siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jadwal')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('registrasi_siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jadwal')->default(null)->change(); 
        });
    }
};
