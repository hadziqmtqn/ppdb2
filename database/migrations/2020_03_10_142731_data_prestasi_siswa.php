<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPrestasiSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_prestasi_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prestasi',115)->nullable();
            $table->string('peringkat_prestasi',115)->nullable();
            $table->string('tingkat_prestasi',115)->nullable();
            $table->string('tahun_prestasi',115)->nullable();

            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('date_prestasi_siswa', function (Blueprint $table) {
            //
        });
    }
}
