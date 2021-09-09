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
                      </tr>
                      <tr>
                        <th>Nama Lengkap Siswa</th>
                        <td>: {{ $dt->name }}</td>
                      </tr>
                      <tr>
                        <th>NISN</th>
                        <td>: {{ $dt->nisn }}</td>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{ $dt->jenis_kelamins->nama }}</td>
                      </tr>
                      <tr>
                        <th>Asal Sekolah</th>
                        <td>: {{ strtoupper($dt->sekolahs->asal_sekolah) }}</td>
                      </tr>
                      <tr>
                        <th>Nama Sekolah</th>
                        <td>: {{ strtoupper($dt->sekolahs->nama) }}</td>
                      </tr>
                      <tr>
                        <th>No HP</th>
                        <td>: {{ $dt->biodata_r->no_hp }}</td>
                      </tr>
                      <tr>
                        <th>Tanggal Cetak</th>
                        <td>: {{ now() }}</td>
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