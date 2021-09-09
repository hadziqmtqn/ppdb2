<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKemenagProfileSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_sekolah', function (Blueprint $table) {
            $table->string('kemenag_pusat')->nullable()->after('no_telp');
            $table->string('kemenag_kabko')->nullable()->after('kemenag_pusat');
            $table->string('website')->nullable()->after('kemenag_kabko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_sekolah', function (Blueprint $table) {
            //
        });
    }
}
