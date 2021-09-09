<?php
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('create-admin',function(){
    \DB::table('users')->insert([
        'role'=>1,
        'name'=>'Admin PPDB',
        'nisn'=>'1',
        'email'=>'ppdb@mtsn3ngawi.sch.id',
        'id_registrasi'=>'-',
        'password'=>bcrypt('santri')
    ]);
});

Route::get('/', function () {
    $title = 'Santri Ngawi | PPDB';
    return view('welcome',compact('title'));
});
 
Route::get('keluar',function(){
    \Auth::logout();
    return redirect('/');
});
 
Route::group(['middleware'=>'jadwal'],function(){
    Route::get('ppdb','Ppdb_controller@index');
    Route::post('ppdb','Ppdb_controller@store');
});
 
Route::group(['middleware'=>'auth'],function(){
 
    Route::get('dashboard','Dashboard\Beranda_controller@index');
 
    Route::get('biodata','Dashboard\Biodata_controller@index');
    Route::post('biodata/{users}','Dashboard\Biodata_controller@store');
    Route::put('biodata/{users}','Dashboard\Biodata_controller@update');
 
    // cetak biodata
    Route::get('cetak-biodata','Dashboard\Biodata_controller@cetak');
    Route::get('cetak-pendaftaran','Dashboard\Biodata_controller@cetak_pendaftaran');
 
    // verifikasi peserta
    Route::get('verifikasi','Dashboard\Verifikasi_controller@index');
    Route::post('verifikasi','Dashboard\Verifikasi_controller@verifikasi');
 
    // Data peserta
    Route::get('peserta','Dashboard\Peserta_controller@index');
    Route::get('peserta/verifikasi','Dashboard\Peserta_controller@diverifikasi');
    Route::get('peserta/belum-verifikasi','Dashboard\Peserta_controller@belum_verifikasi');

    Route::get('peserta/{id}','Dashboard\Peserta_controller@edit');
    Route::put('peserta/{id}','Dashboard\Peserta_controller@update');

    Route::get('peserta/export/{id}','Dashboard\Peserta_controller@export');

    Route::post('peserta/excel','Dashboard\Peserta_controller@excel');
 
    Route::delete('peserta/{id}','Dashboard\Peserta_controller@delete');

    Route::get('peserta/{id}/lulus','Dashboard\Peserta_controller@lulus');

    // profile sekolah
    Route::get('profile-sekolah','Dashboard\Profile_sekolah_controller@index');
    Route::put('profile-sekolah','Dashboard\Profile_sekolah_controller@update');

     // pesan
    Route::get('pesan','Dashboard\Pesan_controller@index');
 
    Route::get('pesan/add','Dashboard\Pesan_controller@add');
    Route::post('pesan/add','Dashboard\Pesan_controller@store');
    Route::get('pesan/{id}','Dashboard\Pesan_controller@detail');

    // laporan nilai
    Route::get('laporan-nilai','Dashboard\Laporan_nilai_controller@index');

    // ganti password
    Route::get('ganti-password','Dashboard\Password_controller@index');
    Route::put('ganti-password','Dashboard\Password_controller@update');

    // jadwal ppdb
    Route::get('jadwal','Dashboard\Jadwal_controller@index');
    Route::post('jadwal','Dashboard\Jadwal_controller@store');
 
});
 
Auth::routes();
 
Route::get('/home', function(){
    return redirect('dashboard');
});