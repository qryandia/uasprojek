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
            $table->string('hari')->nullable(); 
            $table->string('waktu')->nullable(); 
        });
    }
    
    public function down()
    {
        Schema::table('registrasi_siswa', function (Blueprint $table) {
            $table->dropColumn(['hari', 'waktu']);
        });
    }
    
};
