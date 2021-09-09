@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
 
                    <a href="{{ url('peserta') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Kembali</a>
                </p>
            </div>
            <div class="box-body">
               
                <form role="form" method="post" action="{{ url('peserta/'.$dt->id) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">NIK Siswa</label>
                        <input type="text" name="nik" class="form-control" id="inputEmail4" placeholder="NIK" value="{{ $dt->biodata_r->nik }}">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Siswa</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="NIK" value="{{ $dt->name }}">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Jenis Kelamin</label>
                        <select type="text" name="jk" class="form-control" id="exampleFormControlSelect1" value="{{ $dt->biodata_r->jk }}">
                          <option selected>Pilih...</option>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="inputEmail4" placeholder="Tempat Lahir" value="{{ $dt->biodata_r->tempat_lahir }}">
                      </div>



                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email Siswa</label>
                        <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{ $dt->email }}">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control datepicker" id="inputEmail4" placeholder="Tanggal Lahir" value="{{ $dt->biodata_r->tanggal_lahir }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Agama</label>
                        <select type="text" name="agama" class="form-control" id="exampleFormControlSelect1" value="{{ $dt->biodata_r->agama }}">
                          <option selected>Pilih...</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                      </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Anak Ke-</label>
                        <input type="text" name="anak_ke" class="form-control" id="inputEmail4" placeholder="Anak Ke-" value="{{ $dt->biodata_r->anak_ke }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Hobi</label>
                        <select type="text" name="hobi" class="form-control" id="exampleFormControlSelect1" value="{{ $dt->biodata_r->hobi }}">
                          <option selected>Pilih...</option>
                          <option value="Olahraga">Olahraga</option>
                          <option value="Kesenian">Kesenian</option>
                          <option value="Membaca">Membaca</option>
                          <option value="Menulis">Menulis</option>
                          <option value="Jalan-jalan">Jalan-jalan</option>
                          <option value="Lainnya">Lainnya</option>
                      </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Cita-cita</label>
                        <select type="text" name="cita_cita" class="form-control" id="exampleFormControlSelect1" value="{{ $dt->biodata_r->cita_cita }}">
                          <option selected>Pilih...</option>
                          <option value="PNS">PNS</option>
                          <option value="TNI/Polri">TNI/Polri</option>
                          <option value="Guru/Dosen">Guru/Dosen</option>
                          <option value="Dokter">Dokter</option>
                          <option value="Politikus">Politikus</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Seniman/Artis">Seniman/Artis</option>
                          <option value="Ilmuwan">Ilmuwan</option>
                          <option value="Agamawan">Agamawan</option>
                          <option value="Lainnya">Lainnya</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">No HP</label>
                        <input type="text" name="no_hp" class="form-control" id="inputEmail4" placeholder="No HP" value="{{ $dt->biodata_r->no_hp }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Jumlah Saudara</label>
                        <input type="text" name="jumlah_saudara" class="form-control" id="inputEmail4" placeholder="Jumlah Saudara" value="{{ $dt->biodata_r->jumlah_saudara }}">
                      </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="card-header">
                          <h3 class="card-title"><u>Data Sekolah Sebelumnya</u></h3>
                          <hr>
                        </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Asal Sekolah</label>
                        <select type="text" name="asal_sekolah" class="form-control" id="exampleFormControlSelect1" value="{{ $dt->biodata_r->asal_sekolah }}">
                          <option selected>Pilih...</option>
                          <option value="SD">SD</option>
                          <option value="MI">MI</option>
                      </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">NPSN Sekolah Asal</label>
                        <input type="text" name="npsn_asal" class="form-control" id="inputEmail4" placeholder="NPSN Sekolah Asal" value="{{ $dt->biodata_r->npsn_asal }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Sekolah Asal</label>
                        <input type="text" name="nama_sek_asal" class="form-control" id="inputEmail4" placeholder="Nama Sekolah Asal" value="{{ $dt->biodata_r->nama_sek_asal }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Alamat Sekolah Asal</label>
                        <input type="text" name="alamat_sek_asal" class="form-control" id="inputEmail4" placeholder="Alamat Sekolah Asal" value="{{ $dt->biodata_r->alamat_sek_asal }}">
                      </div>
                    </div>


                    <div class="form-group">
                        <div class="card-header">
                          <h3 class="card-title"><u>Data Tempat Tinggal Siswa</u></h3>
                          <hr>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputAddress">Jenis Tempat Tinggal Siswa</label>
                      <select id="inputState" class="form-control" name="jenis_siswa_tinggal" value="{{ $dt->biodata_r->jenis_siswa_tinggal }}">
                          <option selected>Pilih...</option>
                            <option value="Tinggal dengan Orang Tua/Wali">Tinggal dengan Orang Tua/Wali</option>
                            <option value="Ikut Saudara/Kerabat">Ikut Saudara/Kerabat</option>
                            <option value="Asrama Madrasah">Asrama Madrasah</option>
                            <option value="Kontrak/Kost">Kontrak/Kost</option>
                            <option value="Asrama Pesantren">Asrama Pesantren</option>
                            <option value="Panti Asuhan">Panti Asuhan</option>
                            <option value="Rumah Singgah">Rumah Singgah</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputAddress">Alamat</label>
                      <input type="text" name="alamat_siswa" class="form-control" id="inputAddress" placeholder="Contoh: Jalan Kenari No. 38" value="{{ $dt->biodata_r->alamat_siswaa }}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Propinsi</label>
                        <input type="text" name="propinsi_siswa" class="form-control" id="inputCity" placeholder="Contoh: Jawa Timur" value="{{ $dt->biodata_r->propinsi_siswa }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">Kabupaten/Kota</label>
                        <input type="text" name="kabkota_siswa" class="form-control" id="inputState" placeholder="Contoh: Ngawi" value="{{ $dt->biodata_r->kabkota_siswa }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Desa/Kelurahan</label>
                        <input type="text" name="desa_kelurahan_siswa" class="form-control" id="inputState" placeholder="Contoh: Beran" value="{{ $dt->biodata_r->desa_kelurahan_siswa }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputCity">Kodepos</label>
                        <input type="text" name="kodepos_siswa" class="form-control" id="inputCity" placeholder="Contoh: 63216" value="{{ $dt->biodata_r->kodepos_siswa }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">Jarak Tempat Tinggal</label>
                        <select id="inputState" class="form-control" name="jarak" value="{{ $dt->biodata_r->jarak }}">
                          <option selected>Pilih...</option>
                            <option value="Kurang dari 5 Km">Kurang dari 5 Km</option>
                            <option value="Antara 5 - 10 Km">Antara 5 - 10 Km</option>
                            <option value="Antara 11 - 20 Km">Antara 11 - 20 Km</option>
                            <option value="Antara 21 - 30 Km">Antara 21 - 30 Km</option>
                            <option value="Lebih dari 30 Km">Lebih dari 30 Km</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip">Transportasi Yang Dipakai</label>
                        <select id="inputState" class="form-control" name="transportasi" value="{{ $dt->biodata_r->transportasi }}">
                          <option selected>Pilih...</option>
                            <option value="Jalan Kaki">Jalan Kaki</option>
                            <option value="Sepeda">Sepeda</option>
                            <option value="Sepeda Motor">Sepeda Motor</option>
                            <option value="Mobil Pribadi">Mobil Pribadi</option>
                            <option value="Antar Jemput Sekolah">Antar Jemput Sekolah</option>
                            <option value="Angkutan Umum">Angkutan Umum</option>
                            <option value="Perahu/Sampan">Perahu/Sampan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                      </div>
                    </div>


                    <div class="form-group">
                        <div class="card-header">
                          <h3 class="card-title"><u>Data Orang Tua dan Wali</u></h3>
                          <hr>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputAddress">Nomor Kartu Keluarga (KK)</label>
                      <input type="text" name="no_kk" class="form-control" id="inputAddress" placeholder="Contoh: 35210030001010" value="{{ $dt->biodata_r->no_kk }}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" id="inputCity" placeholder="Contoh: Slamet" value="{{ $dt->biodata_r->nama_ayah }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">NIK Ayah</label>
                        <input type="text" name="nik_ayah" class="form-control" id="inputState" placeholder="Contoh: 352100038128378" value="{{ $dt->biodata_r->nik_ayah }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Tempat Lahir Ayah</label>
                        <input type="text" name="tempat_lahir_ayah" class="form-control" id="inputState" placeholder="Contoh: Ngawi" value="{{ $dt->biodata_r->tempat_lahir_ayah }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Tanggal Lahir Ayah</label>
                        <input type="text" name="tanggal_lahir_ayah" class="form-control datepicker" id="inputCity" value="{{ $dt->biodata_r->tanggal_lahir_ayah }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">Status Ayah Kandung</label>
                        <select id="inputState" class="form-control" name="status_ayah" value="{{ $dt->biodata_r->status_ayah }}">
                          <option selected>Pilih...</option>
                            <option value="Masih Hidup">Masih Hidup</option>
                            <option value="Sudah Meninggal">Sudah Meninggal</option>
                            <option value="Tidak Diketahui">Tidak Diketahui</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Pendidikan Ayah</label>
                        <select id="inputState" class="form-control" name="pendidikan_ayah" value="{{ $dt->biodata_r->pendidikan_ayah }}">
                          <option selected>Pilih...</option>
                            <option value="Tidak berpendidikan">Tidak berpendidikan</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SMP/Sederajat">SMP/Sederajat</option>
                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputAddress">Pekerjaan Ayah</label>
                      <select id="inputState" class="form-control" name="pekerjaan_ayah" value="{{ $dt->biodata_r->pekerjaan_ayah }}">
                          <option selected>Pilih...</option>
                            <option value="Tidak bekerja">Tidak bekerja</option>
                            <option value="Pensiunan/Almarhum">Pensiunan/Almarhum</option>
                            <option value="PNS">PNS</option>
                            <option value="TNI/Polisi">TNI/Polisi</option>
                            <option value="Guru/Dosen">Guru/Dosen</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Pengusaha/Wiraswasta">Pengusaha/Wiraswasta</option>
                            <option value="Pengacara/Hakim/Jaksa/Notaris">Pengacara/Hakim/Jaksa/Notaris</option>
                            <option value="Seniman/Pelukis/Artis/Sejenis">Seniman/Pelukis/Artis/Sejenis</option>
                            <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                            <option value="Pilot/Pramugari">Pilot/Pramugari</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Petani/Peternak">Petani/Peternak</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                            <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                            <option value="Politikus">Politikus</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" id="inputCity" placeholder="Contoh: Mawar Melati" value="{{ $dt->biodata_r->nama_ibu }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">NIK Ibu</label>
                        <input type="text" name="nik_ibu" class="form-control" id="inputCity" placeholder="Contoh: 352108980001" value="{{ $dt->biodata_r->nik_ibu }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Tempat Lahir Ibu</label>
                        <input type="text" name="tempat_lahir_ibu" class="form-control" id="inputCity" placeholder="Contoh: California" value="{{ $dt->biodata_r->tempat_lahir_ibu }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Tanggal Lahir Ibu</label>
                        <input type="text" name="tanggal_lahir_ibu" class="form-control datepicker" id="inputCity" value="{{ $dt->biodata_r->tanggal_lahir_ibu }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">Status Ibu Kandung</label>
                        <select id="inputState" class="form-control" name="status_ibu" value="{{ $dt->biodata_r->status_ibu }}">
                          <option selected>Pilih...</option>
                            <option value="Masih Hidup">Masih Hidup</option>
                            <option value="Sudah Meninggal">Sudah Meninggal</option>
                            <option value="Tidak Diketahui">Tidak Diketahui</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Pendidikan Ibu</label>
                        <select id="inputState" class="form-control" name="pendidikan_ibu" value="{{ $dt->biodata_r->pendidikan_ibu }}">
                          <option selected>Pilih...</option>
                            <option value="Tidak berpendidikan">Tidak berpendidikan</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SMP/Sederajat">SMP/Sederajat</option>
                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputAddress">Pekerjaan Ibu</label>
                      <select id="inputState" class="form-control" name="pekerjaan_ibu" value="{{ $dt->biodata_r->pekerjaan_ibu }}">
                          <option selected>Pilih...</option>
                            <option value="Tidak bekerja">Tidak bekerja</option>
                            <option value="Pensiunan/Almarhum">Pensiunan/Almarhum</option>
                            <option value="PNS">PNS</option>
                            <option value="TNI/Polisi">TNI/Polisi</option>
                            <option value="Guru/Dosen">Guru/Dosen</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Pengusaha/Wiraswasta">Pengusaha/Wiraswasta</option>
                            <option value="Pengacara/Hakim/Jaksa/Notaris">Pengacara/Hakim/Jaksa/Notaris</option>
                            <option value="Seniman/Pelukis/Artis/Sejenis">Seniman/Pelukis/Artis/Sejenis</option>
                            <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                            <option value="Pilot/Pramugari">Pilot/Pramugari</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Petani/Peternak">Petani/Peternak</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                            <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                            <option value="Politikus">Politikus</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Nama Wali</label>
                        <input type="text" name="nama_wali" class="form-control datepicker" id="inputCity" placeholder="Contoh: Mawar Melati" value="{{ $dt->biodata_r->nama_wali }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">NIK Wali</label>
                        <input type="text" name="nik_wali" class="form-control" id="inputCity" placeholder="Contoh: 352108980001" value="{{ $dt->biodata_r->nik_wali }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Tempat Lahir Wali</label>
                        <input type="text" name="tempat_lahir_wali" class="form-control" id="inputCity" placeholder="Contoh: California" value="{{ $dt->biodata_r->tempat_lahir_wali }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Tanggal Lahir Wali</label>
                        <input type="text" name="tanggal_lahir_wali" class="form-control datepicker" id="inputCity" value="{{ $dt->biodata_r->tanggal_lahir_wali }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Pendidikan Wali</label>
                        <select id="inputState" class="form-control" name="pendidikan_wali" value="{{ $dt->biodata_r->pendidikan_wali }}">
                          <option selected>Pilih...</option>
                            <option value="Tidak berpendidikan">Tidak berpendidikan</option>
                            <option value="SD/Sederajat">SD/Sederajat</option>
                            <option value="SMP/Sederajat">SMP/Sederajat</option>
                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputAddress">Pekerjaan Wali</label>
                      <select id="inputState" class="form-control" name="pekerjaan_wali" value="{{ $dt->biodata_r->pekerjaan_wali }}">
                          <option selected>Pilih...</option>
                            <option value="Tidak bekerja">Tidak bekerja</option>
                            <option value="Pensiunan/Almarhum">Pensiunan/Almarhum</option>
                            <option value="PNS">PNS</option>
                            <option value="TNI/Polisi">TNI/Polisi</option>
                            <option value="Guru/Dosen">Guru/Dosen</option>
                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                            <option value="Pengusaha/Wiraswasta">Pengusaha/Wiraswasta</option>
                            <option value="Pengacara/Hakim/Jaksa/Notaris">Pengacara/Hakim/Jaksa/Notaris</option>
                            <option value="Seniman/Pelukis/Artis/Sejenis">Seniman/Pelukis/Artis/Sejenis</option>
                            <option value="Dokter/Bidan/Perawat">Dokter/Bidan/Perawat</option>
                            <option value="Pilot/Pramugari">Pilot/Pramugari</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Petani/Peternak">Petani/Peternak</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Buruh (Tani/Pabrik/Bangunan)">Buruh (Tani/Pabrik/Bangunan)</option>
                            <option value="Sopir/Masinis/Kondektur">Sopir/Masinis/Kondektur</option>
                            <option value="Politikus">Politikus</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputAddress">Penghasilan Orang Tua</label>
                      <select id="inputState" class="form-control" name="penghasilan_ortu" value="{{ $dt->biodata_r->penghasilan_ortu }}">
                          <option selected>Pilih...</option>
                            <option value="Kurang dari Rp 500.000">Kurang dari Rp 500.000</option>
                            <option value="Rp 500.001 - Rp 1.000.000">Rp 500.001 - Rp 1.000.000</option>
                            <option value="Rp 1.000.001 - Rp 2.000.000">Rp 1.000.001 - Rp 2.000.000</option>
                            <option value="Rp 2.000.001 - Rp 3.000.000">Rp 2.000.001 - Rp 3.000.000</option>
                            <option value="Rp 3.000.001 - Rp 5.000.000">Rp 3.000.001 - Rp 5.000.000</option>
                            <option value="Lebih dari Rp 5.000.000">Lebih dari Rp 5.000.000</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="card-header">
                          <h3 class="card-title"><u>Data Alamat Orang Tua</u></h3>
                          <hr>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputAddress">Status Kepemilikan Rumah</label>
                      <select id="inputState" class="form-control" name="status_rumah_ortu" value="{{ $dt->biodata_r->status_rumah_ortu }}">
                          <option selected>Pilih...</option>
                            <option value="Milik Sendiri">Milik Sendiri</option>
                            <option value="Rumah Orang Tua">Rumah Orang Tua</option>
                            <option value="Rumah Saudara/Kerabat">Rumah Saudara/Kerabat</option>
                            <option value="Rumah Dinas">Rumah Dinas</option>
                            <option value="Sewa/Kontrak">Sewa/Kontrak</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputAddress">Alamat</label>
                      <input type="text" name="alamat_ortu" class="form-control" id="inputAddress" placeholder="Contoh: Jalan Kenari No. 38" value="{{ $dt->biodata_r->alamat_ortu }}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Propinsi</label>
                        <input type="text" name="propinsi_ortu" class="form-control" id="inputCity" placeholder="Contoh: Jawa Timur" value="{{ $dt->biodata_r->propinsi_ortu }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputState">Kabupaten/Kota</label>
                        <input type="text" name="kabkota_ortu" class="form-control" id="inputState" placeholder="Contoh: Ngawi" value="{{ $dt->biodata_r->kabkota_ortu }}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="inputZip">Desa/Kelurahan</label>
                        <input type="text" name="desa_kelurahan_ortu" class="form-control" id="inputState" placeholder="Contoh: Beran" value="{{ $dt->biodata_r->desa_kelurahan_ortu }}">
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputAddress">Kodepos</label>
                      <input type="text" name="kodepos_ortu" class="form-control" id="inputAddress" placeholder="Contoh: Jalan Kenari No. 38" value="{{ $dt->biodata_r->kodepos_ortu }}">
                    </div>

                    <div class="form-group">
                        <div class="card-header">
                          <h3 class="card-title"><u>Data Kartu PIP</u></h3>
                          <hr>
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="form-group col-md-12">
                        <label for="inputCity">Nomor Kartu Keluarga Sejahtera (KKS)</label>
                        <input type="text" name="no_kks" class="form-control" id="inputCity" placeholder="Nomor Kartu Keluarga Sejahtera (KKS)" value="{{ $dt->biodata_r->no_kks }}">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputState">Nomor Kartu Program Keluarga Harapan (PKH)</label>
                        <input type="text" name="no_pkh" class="form-control" id="inputState" placeholder="Nomor Kartu Program Keluarga Harapan (PKH)" value="{{ $dt->biodata_r->no_pkh }}">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputZip">Nomor Kartu Indonesia Pintar (KIP)</label>
                        <input type="text" name="no_kip" class="form-control" id="inputState" placeholder="Nomor Kartu Indonesia Pintar (KIP)" value="{{ $dt->biodata_r->no_kip }}">
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="card-header">
                          <h3 class="card-title"><u>Data Nilai Raport</u></h3>
                          <hr>
                        </div>
                    </div>

                    <div class="card-header">
                          <h3 class="card-title">Agama</h3>
                          <hr>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">Kelas 5 Semester 1</label>
                        <input type="text" name="nilai_agama_51" class="form-control" id="inputCity" placeholder="Nilai Agama Kelas 5 Semester 1" value="{{ $dt->biodata_r->nilai_agama_51 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Kelas 5 Semester 2</label>
                        <input type="text" name="nilai_agama_52" class="form-control" id="inputState" placeholder="Nilai Agama Kelas 5 Semester 2" value="{{ $dt->biodata_r->nilai_agama_52 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">Kelas 6 Semester 1</label>
                        <input type="text" name="nilai_agama_61" class="form-control" id="inputState" placeholder="Nilai Agama Kelas 6 Semester 1" value="{{ $dt->biodata_r->nilai_agama_61 }}">
                      </div>
                    </div>

                    <div class="card-header">
                          <h3 class="card-title">Bahasa Indonesia</h3>
                          <hr>
                        </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">Kelas 5 Semester 1</label>
                        <input type="text" name="nilai_bin_51" class="form-control" id="inputCity" placeholder="Nilai Bahasa Indonesia Kelas 5 Semester 1" value="{{ $dt->biodata_r->nilai_bin_51 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Kelas 5 Semester 2</label>
                        <input type="text" name="nilai_bin_52" class="form-control" id="inputState" placeholder="Nilai Bahasa Indonesia Kelas 5 Semester 2" value="{{ $dt->biodata_r->nilai_bin_52 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">Kelas 6 Semester 1</label>
                        <input type="text" name="nilai_bin_61" class="form-control" id="inputState" placeholder="Nilai Bahasa Indonesia Kelas 6 Semester 1" value="{{ $dt->biodata_r->nilai_bin_61 }}">
                      </div>
                    </div>

                    <div class="card-header">
                          <h3 class="card-title">Matematika</h3>
                          <hr>
                        </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">Kelas 5 Semester 1</label>
                        <input type="text" name="nilai_mat_51" class="form-control" id="inputCity" placeholder="Nilai Matematika Kelas 5 Semester 1" value="{{ $dt->biodata_r->nilai_mat_51 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Kelas 5 Semester 2</label>
                        <input type="text" name="nilai_mat_52" class="form-control" id="inputState" placeholder="Nilai Matematika Kelas 5 Semester 2" value="{{ $dt->biodata_r->nilai_mat_52 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">Kelas 6 Semester 1</label>
                        <input type="text" name="nilai_mat_61" class="form-control" id="inputState" placeholder="Nilai Matematika Kelas 6 Semester 1" value="{{ $dt->biodata_r->nilai_mat_61 }}">
                      </div>
                    </div>

                    <div class="card-header">
                          <h3 class="card-title">Ilmu Pengetahuan Alam</h3>
                          <hr>
                        </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">Kelas 5 Semester 1</label>
                        <input type="text" name="nilai_ipa_51" class="form-control" id="inputCity" placeholder="Nilai Ilmu Pengetahuan Alam Kelas 5 Semester 1" value="{{ $dt->biodata_r->nilai_ipa_51 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Kelas 5 Semester 2</label>
                        <input type="text" name="nilai_ipa_52" class="form-control" id="inputState" placeholder="Nilai Ilmu Pengetahuan Alam Kelas 5 Semester 2" value="{{ $dt->biodata_r->nilai_ipa_52 }}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">Kelas 6 Semester 1</label>
                        <input type="text" name="nilai_ipa_61" class="form-control" id="inputState" placeholder="Nilai Ilmu Pengetahuan Alam Kelas 6 Semester 1" value="{{ $dt->biodata_r->nilai_ipa_61 }}">
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="card-header">
                          <h3 class="card-title"><u>Data Prestasi Siswa</u></h3>
                          <hr>
                        </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Prestasi</label>
                        <input type="text" name="prestasi" class="form-control" id="inputEmail4" placeholder="Prestasi yang pernah diraih" value="{{ $dt->biodata_r->prestasi }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Tingkat Prestasi</label>
                        <input type="text" name="tingkat_prestasi" class="form-control" id="inputEmail4" placeholder="Tingkat Prestasi" value="{{ $dt->biodata_r->tingkat_prestasi }}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Peringkat Prestasi</label>
                        <input type="text" name="peringkat_prestasi" class="form-control" id="inputEmail4" placeholder="Peringkat Prestasi" value="{{ $dt->biodata_r->peringkat_prestasi }}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Tahun Prestasi</label>
                        <input type="text" name="tahun_prestasi" class="form-control" id="inputEmail4" placeholder="Tahun Prestasi" value="{{ $dt->biodata_r->tahun_prestasi }}">
                      </div>
                    </div>

                    <div class="box-footer">  
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
              </form>
 
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection