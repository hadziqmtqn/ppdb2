@extends('layouts.master')
 
@section('content')
 
<!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">MTsN Kota Probolinggo</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Selamat datang di Website Pendaftaran Peserta Didik Baru Melalui Jalur Prestasi.</p>
              <p class="small-text">Pendaftaran akan dibuka pada tanggal 9 - 18 Maret 2020<br>Untuk melakukan pendaftaran, silahkan baca panduan di bawah ini.</p>
              <a href="#panduan" class="btn get-quote">PANDUAN PENDAFTARAN</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->

  <!--Feature-->
  <section id="panduan" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Panduan Pendaftaran</h2>
          <p>Berikut ini adalah langkah-langkah yang harus dilakukan untuk mendaftar secara online di MTsN Kota Probolinggo.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Langkah Pertama</h4>
                <p>Klik menu daftar ppdb di pojok kanan atas, isi data dengan benar. Kemudian silahkan login menggunakan email yang didaftarkan dengan password "123" (tanpa tanda petik)</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-hand-o-right"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Langkah Kedua</h4>
                <p>Setelah login, lengkapi biodata anda dengan klik menu biodata di sebelah kiri. Setelah biodata selesai dilengkapi, maka tombol cetak bukti pendaftaran akan muncul.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-hand-peace-o"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Langkah Ketiga</h4>
                <p>Cetak tanda bukti pendaftaran anda kemudian serahkan ke MTsN Kota Probolinggo sambil membawa berkas-berkas yang diperlukan untuk diverifikasi oleh Panitia PPDB.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-thumbs-up"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->
 
@endsection