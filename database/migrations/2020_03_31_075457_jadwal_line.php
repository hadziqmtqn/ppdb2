<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JadwalLine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_line', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jadwal')->unsigned();
            $table->datetime('tanggal');
            $table->timestamps();

            $table->foreign('jadwal')->references('id')->on('jadwal')->onDelete('cascade');

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
        Schema::table('jadwal_line', function (Blueprint $table) {
            //
        });
    }
}
