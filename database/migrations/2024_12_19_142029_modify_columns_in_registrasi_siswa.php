<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsInRegistrasiSiswa extends Migration
{
    public function up()
    {
        Schema::table('registrasi_siswa', function (Blueprint $table) {
            // Menghapus kolom lama (opsional jika ingin memindahkannya)
            $table->dropColumn('hari');
            $table->dropColumn('waktu');
        });

        // Membuat ulang kolom dengan posisi yang diinginkan
        Schema::table('registrasi_siswa', function (Blueprint $table) {
            $table->string('hari')->nullable()->after('id_kelas');
            $table->string('waktu')->nullable()->after('hari');
        });
    }

    public function down()
    {
        Schema::table('registrasi_siswa', function (Blueprint $table) {
            $table->dropColumn('hari');
            $table->dropColumn('waktu');
        });
    }
}
