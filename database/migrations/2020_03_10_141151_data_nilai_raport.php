<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataNilaiRaport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_nilai_raport', function (Blueprint $table) {
            $table->increments('id');
            $table->float('agama_5_1',8,2)->nullable();
            $table->float('agama_5_2',8,2)->nullable();
            $table->float('agama_6_1',8,2)->nullable();

            $table->float('bahasa_5_1',8,2)->nullable();
            $table->float('bahasa_5_2',8,2)->nullable();
            $table->float('bahasa_6_1',8,2)->nullable();

            $table->float('matematika_5_1',8,2)->nullable();
            $table->float('matematika_5_2',8,2)->nullable();
            $table->float('matematika_6_1',8,2)->nullable();

            $table->float('ipa_5_1',8,2)->nullable();
            $table->float('ipa_5_2',8,2)->nullable();
            $table->float('ipa_6_1',8,2)->nullable();

            $table->float('ips_5_1',8,2)->nullable();
            $table->float('ips_5_2',8,2)->nullable();
            $table->float('ips_6_1',8,2)->nullable();

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
        Schema::table('data_nilai_raport', function (Blueprint $table) {
            //
        });
    }
}
