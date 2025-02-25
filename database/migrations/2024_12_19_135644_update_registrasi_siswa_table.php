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
            if (!Schema::hasColumn('registrasi_siswa', 'foto')) {
                $table->binary('foto')->nullable();
            }
            if (!Schema::hasColumn('registrasi_siswa', 'ktp')) {
                $table->binary('ktp')->nullable();
            }
            if (!Schema::hasColumn('registrasi_siswa', 'kk')) {
                $table->binary('kk')->nullable();
            }
        });
    }
    
    
};
