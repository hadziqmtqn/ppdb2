<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataSekolahSebelumnya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sekolah_sebelumnya', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',255)->nullable();
            $table->string('npsn',115)->nullable();
            $table->text('alamat')->nullable();
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
        Schema::table('data_sekolah_sebelumnya', function (Blueprint $table) {
            //
        });
    }
}
