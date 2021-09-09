<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bukti Pendaftaran</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/AdminLTE.min.css')}}">
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

</head>
<body>

    <div class="container">
      
      <table align="center">
          <tr>
            <td><img src="{{asset('/uploads/kemenag.jpg') }}" style="width: 120px, height: 120px;"></td>
            <td style="width:600px;"><center>
              <font size="5">{{ $sk->kemenag_pusat }}</font><br>
              <font size="4">{{ $sk->kemenag_kabko }}</font><br>
              <font size="3">{{ $sk->nama }}</font><br>
              <font size="3">{{ $sk->alamat }}</font><br>
              <font size="2">{{ $sk->no_telp }}</font><br>
              <font size="2">{{ $sk->website }}</font></center>
            </td>
          </tr>
          <tr>
            <td colspan="2"><hr></td>
          </tr>
        </table>
        <div class="col-12">
                  <p class="lead" align="center"><b>Tanda Bukti Pendaftaran PPDB Online MTsN Kota Probolinggo <br>Tahun Pelajaran 2020/2021</b></p>
                  <br>
                  <br>


                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:100%">Nomor Pendaftaran</th>
                        <td>: {{ $dt->id_registrasi }}</td>

                        <td><b> Email</b></td>
                        <td>: {{ $dt->email }}</td>
                      </tr>
                      <tr>
                        <th>Nama Lengkap Siswa</th>
                        <td>: {{ $dt->name }}</td>

                        <td><b> ID Registrasi</b></td>
                        <td>: {{ $dt->id_registrasi }}</td>
                      </tr>
                      <tr>
                        <th>NISN</th>
                        <td>: {{ $dt->nisn }}</td>

                        <td><b> Prestasi</b></td>
                        <td>: {{ $dt->prestasis->prestasi }}</td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{ $dt->jenis_kelamins->nama }}</td>

                        <td><b> Tingkat Prestasi</b></td>
                        <td>: {{ $dt->prestasis->tingkat_prestasi }}</td>
                      </tr>
                      <tr>
                        <th>Asal Sekolah</th>
                        <td>: {{ strtoupper($dt->sekolahs->asal_sekolah) }}</td>

                        <td><b> Tahun Prestasi</b></td>
                        <td>: {{ $dt->prestasis->tahun_prestasi }}</td>
                      </tr>
                      <tr>
                        <th>Nama Sekolah</th>
                        <td>: {{ strtoupper($dt->sekolahs->nama) }}</td>

                        <td><b> NPSN</b></td>
                        <td>: {{ $dt->prestasis->npsn }}</td>
                      </tr>
                      <tr>
                        <th>No HP</th>
                        <td>: {{ $dt->biodata_r->no_hp }}</td>

                        <td><b> Agama</b></td>
                        <td>: {{ $dt->biodata_r->agama }}</td>
                      </tr>
                      <tr>
                        <th>Tanggal Cetak</th>
                        <td>: {{ date('d M Y') }}</td>

                        <td><b> Anak ke</b></td>
                        <td>: {{ $dt->biodata_r->anak_ke }}</td>
                      </tr>

                      <tr>
                        <th>Jumlah Saudara</th>
                        <td>: {{ $dt->biodata_r->jumlah_saudara }}</td>

                        <td><b> Hobi</b></td>
                        <td>: {{ $dt->biodata_r->hobi }}</td>
                      </tr>

                      <tr>
                        <th>Cita Cita</th>
                        <td>: {{ $dt->biodata_r->cita_cita }}</td>

                        <td><b> No HP</b></td>
                        <td>: {{ $dt->biodata_r->no_hp }}</td>
                      </tr>

                      <tr>
                        <th>Jenis Siswa Tinggal</th>
                        <td>: {{ $dt->biodata_r->jenis_siswa_tinggal }}</td>

                        <td><b> Alamat Siswa</b></td>
                        <td>: {{ $dt->biodata_r->alamat_siswa }}</td>
                      </tr>

                      <tr>
                        <th>Provinsi</th>
                        <td>: {{ $dt->biodata_r->propinsi_siswa }}</td>

                        <td><b> Kab/Kota</b></td>
                        <td>: {{ $dt->biodata_r->kabkota_siswa }}</td>
                      </tr>

                      <tr>
                        <th>Kelurahan</th>
                        <td>: {{ $dt->biodata_r->desa_kelurahan_siswa }}</td>

                        <td><b> Kodepos</b></td>
                        <td>: {{ $dt->biodata_r->kodepos_siswa }}</td>
                      </tr>

                      <tr>
                        <th>Jarak</th>
                        <td>: {{ $dt->biodata_r->jarak }}</td>

                        <td><b> Transportasi</b></td>
                        <td>: {{ $dt->biodata_r->transportasi }}</td>
                      </tr>

                      <tr>
                        <th>No KK</th>
                        <td>: {{ $dt->biodata_r->no_kk }}</td>

                        <td><b> Nama Ayah</b></td>
                        <td>: {{ $dt->biodata_r->nama_ayah }}</td>
                      </tr>

                      <tr>
                        <th>NIK Ayah</th>
                        <td>: {{ $dt->biodata_r->nik_ayah }}</td>

                        <td><b> Tempat Lahir Ayah</b></td>
                        <td>: {{ $dt->biodata_r->tempat_lahir_ayah }}</td>
                      </tr>

                      <tr>
                        <th>Tgl Lahir Ayah</th>
                        <td>: {{ $dt->biodata_r->tanggal_lahir_ayah }}</td>

                        <td><b> Status Ayah</b></td>
                        <td>: {{ $dt->biodata_r->status_ayah }}</td>
                      </tr>

                      <tr>
                        <th>Pendidikan Ayah</th>
                        <td>: {{ $dt->biodata_r->pendidikan_ayah }}</td>

                        <td><b> Pekerjaan Ayah</b></td>
                        <td>: {{ $dt->biodata_r->pekerjaan_ayah }}</td>
                      </tr>

                      <tr>
                        <th>Nama Ibu</th>
                        <td>: {{ $dt->biodata_r->nama_ibu }}</td>

                        <td><b> NIK Ibu</b></td>
                        <td>: {{ $dt->biodata_r->nik_ibu }}</td>
                      </tr>

                      <tr>
                        <th>Tempat Lahir Ibu</th>
                        <td>: {{ $dt->biodata_r->tempat_lahir_ibu }}</td>

                        <td><b> Tgl Lahir Ibu</b></td>
                        <td>: {{ $dt->biodata_r->tanggal_lahir_ibu }}</td>
                      </tr>

                      <tr>
                        <th>Status ibu</th>
                        <td>: {{ $dt->biodata_r->status_ibu }}</td>

                        <td><b> Pendidikan Ibu</b></td>
                        <td>: {{ $dt->biodata_r->pendidikan_ibu }}</td>
                      </tr>

                      <tr>
                        <th>Pekerjaan Ibu</th>
                        <td>: {{ $dt->biodata_r->pekerjaan_ibu }}</td>

                        <td><b> Status Ayah</b></td>
                        <td>: {{ $dt->biodata_r->status_ayah }}</td>
                      </tr>

                      <tr>
                        <th>Penghasilan Orang Tua</th>
                        <td>: {{ $dt->biodata_r->penghasilan_ortu }}</td>

                        <td><b> No KKS</b></td>
                        <td>: {{ $dt->biodata_r->no_kks }}</td>
                      </tr>

                      <tr>
                        <th>No PKH</th>
                        <td>: {{ $dt->biodata_r->no_pkh }}</td>

                        <td><b> No KIP</b></td>
                        <td>: {{ $dt->biodata_r->no_kip }}</td>
                      </tr>

                      <tr>
                        <th>Status Rumah Ortu</th>
                        <td>: {{ $dt->biodata_r->status_rumah_ortu }}</td>

                        <td><b> Alamat Ortu</b></td>
                        <td>: {{ $dt->biodata_r->alamat_ortu }}</td>
                      </tr>
                    </table>
                  </div>
        </div>

        <table>
          <tbody>
            <tr>
              <th width="">
                <!-- <center> -->
                  <p>Tanda Tangan Panitia PPDB</p>
                <!-- </center> -->
              </th>

              <th>
                <!-- <center> -->
                  <p>Tanda Tangan Pendaftar</p>
                <!-- </center> -->
              </th>
            </tr>

            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>
            <tr>
              <th></th>
            </tr>

            <tr>
              <th width="300">
                <center>
                  <p></p>
                </center>
              </th>

              <th>
                <center>
                  <p>{{ $dt->name }}</p>
                </center>
              </th>
            </tr>
          </tbody>
        </table>

    </div>
        
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>