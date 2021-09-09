<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAgamaBiodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('biodata', function (Blueprint $table) {
            $table->string('agama')->nullable()->after('jk');
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('npsn_asal')->nullable();
            $table->string('nama_sek_asal')->nullable();
            $table->string('alamat_sek_asal')->nullable();
            $table->string('jenis_siswa_tinggal')->nullable();
            $table->string('alamat_siswa')->nullable();
            $table->string('propinsi_siswa')->nullable();
            $table->string('kabkota_siswa')->nullable();
            $table->string('desa_kelurahan_siswa')->nullable();
            $table->string('kodepos_siswa')->nullable();
            $table->string('jarak')->nullable();
            $table->string('transportasi')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->string('tahun_lahir_ayah')->nullable();
            $table->string('status_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->string('tahun_lahir_ibu')->nullable();
            $table->string('status_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullabl();
            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->string('tahun_lahir_wali')->nullable();
            $table->string('status_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_ortu')->nullable();
            $table->string('no_kks')->nullable();
            $table->string('no_pkh')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('status_rumah_ortu')->nullable();
            $table->string('alamat_ortu')->nullable();
            $table->string('propinsi_ortu')->nullable();
            $table->string('kabkota_ortu')->nullable();
            $table->string('desa_kelurahan_ortu')->nullable();
            $table->string('nilai_41')->nullable();
            $table->string('nilai_42')->nullable();
            $table->string('nilai_51')->nullable();
            $table->string('nilai_52')->nullable();
            $table->string('nilai_61')->nullable();
            $table->string('prestasi')->nullable();
            $table->string('tingkat_prestasi')->nullable();
            $table->string('peringkat_prestasi')->nullable();
            $table->string('tahun_prestasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('biodata', function (Blueprint $table) {
            //
        });
    }
}
