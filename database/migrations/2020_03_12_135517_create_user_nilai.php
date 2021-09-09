<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_nilai', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('user')->unsigned();
            $table->float('nilai_baca_quran',8,2);
            $table->float('nilai_test_akademik',8,2);
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users')->onDelete('restrict');
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
        Schema::table('users_nilai', function (Blueprint $table) {
            //
        });
    }
}
