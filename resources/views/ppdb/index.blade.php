@extends('layouts.master')
 
@section('content')
 
<br>
<br>
<br>
<br>

<div class="container">
  @if(Session::has('sukses'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                    {{ Session::get('sukses') }}
                </div>
                @endif
 
                @if(Session::has('gagal'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                    {{ Session::get('gagal') }}
                </div>
                @endif

    <form role="form" method="post" action="{{ url('ppdb') }}">
      @csrf
    <div class="row">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-md-6">
            
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NISN Siswa <small style="color: red;"><i><a target="_blank" href="https://referensi.data.kemdikbud.go.id/nisn/index.php/Cindex/caribynisn/">(cek kevalidan NISN anda disini)</a></i></small></label>
                  <input type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="NISN Siswa">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">No. Telp/HP</label>
                  <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="No. Telp/HP">
                </div>
                
              </div>
              <!-- /.box-body -->

              
            
        </div>

        <div class="col-md-6">
            
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <select class="form-control select2" name="jenis_kelamin">
                      @foreach($kelamin as $kl)
                      <option value="{{ $kl->id }}">{{ $kl->nama }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="text" name="tanggal_lahir" class="form-control datepicker" id="exampleInputPassword1" placeholder="Tanggal Lahir" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" autocomplete="off">
                </div>
                
              </div>
              <!-- /.box-body -->

              
            
        </div>
    </div>


    <div class="row">
            <h3><u>Data Sekolah Sebelumnya</u></h3>
        <div class="col-md-6">
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Asal Sekolah</label>
                  <select class="form-control select2" name="asal_sekolah">
                    <option selected="" disabled="">Asal Sekolah</option>
                    <option value="sd">SD</option>
                    <option value="mi">MI</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Sekolah Asal</label>
                  <input type="text" name="nama_sekolah_asal" class="form-control" id="exampleInputEmail1" placeholder="Nama Sekolah Asal">
                </div>
                
              </div>
              <!-- /.box-body -->

              
            
        </div>

        <div class="col-md-6">
            
            
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputPassword1">NPSN Sekolah Asal</label>
                  <input type="text" name="npsn" class="form-control" id="exampleInputPassword1" placeholder="NPSN Sekolah Asal">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat Sekolah Asal</label>
                  <textarea class="form-control" name="alamat_sekolah_asal"></textarea>
                </div>
                
              </div>
              <!-- /.box-body -->

              
            
        </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <h3><u>Data Nilai Raport</u></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h4><u>Agama *</u></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 1</label>
          <input type="text" name="agama_5_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Agama Kelas 5 Semester 1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 2</label>
          <input type="text" name="agama_5_2" class="form-control" id="exampleInputPassword1" placeholder="Nilai Agama Kelas 5 Semester 2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 6 Semester 1</label>
          <input type="text" name="agama_6_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Agama Kelas 6 Semester 2">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <h4><u>Bahasa Indonesia *</u></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 1</label>
          <input type="text" name="bahasa_5_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Bahasa Indonesia Kelas 5 Semester 1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 2</label>
          <input type="text" name="bahasa_5_2" class="form-control" id="exampleInputPassword1" placeholder="Nilai Bahasa Indonesia Kelas 5 Semester 2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 6 Semester 1</label>
          <input type="text" name="bahasa_6_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Bahasa Indonesia Kelas 6 Semester 2">
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-12">
        <h4><u>Matematika *</u></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 1</label>
          <input type="text" name="matematika_5_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Matematika Kelas 5 Semester 1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 2</label>
          <input type="text" name="matematika_5_2" class="form-control" id="exampleInputPassword1" placeholder="Nilai Matematika Kelas 5 Semester 2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 6 Semester 1</label>
          <input type="text" name="matematika_6_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Matematika Kelas 6 Semester 2">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <h4><u>Ilmu Pengetahuan Alam *</u></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 1</label>
          <input type="text" name="ipa_5_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Ilmu Pengetahuan Alam Kelas 5 Semester 1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 2</label>
          <input type="text" name="ipa_5_2" class="form-control" id="exampleInputPassword1" placeholder="Nilai Ilmu Pengetahuan Alam Kelas 5 Semester 2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 6 Semester 1</label>
          <input type="text" name="ipa_6_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Ilmu Pengetahuan Alam Kelas 6 Semester 2">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <h4><u>Ilmu Pengetahuan Sosial *</u></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 1</label>
          <input type="text" name="ips_5_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Ilmu Pengetahuan Sosial Kelas 5 Semester 1">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 5 Semester 2</label>
          <input type="text" name="ips_5_2" class="form-control" id="exampleInputPassword1" placeholder="Nilai Ilmu Pengetahuan Sosial Kelas 5 Semester 2">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas 6 Semester 1</label>
          <input type="text" name="ips_6_1" class="form-control" id="exampleInputPassword1" placeholder="Nilai Ilmu Pengetahuan Sosial Kelas 6 Semester 2">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <h3><u>Data Prestasi Siswa</u></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Prestasi</label>
          <input type="text" name="prestasi" class="form-control" id="exampleInputPassword1" placeholder="Prestasi yang pernah diraih">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Tingkat Prestasi</label>
          <input type="text" name="tingkat_prestasi" class="form-control" id="exampleInputPassword1" placeholder="Tingkat Prestasi">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Peringkat Prestasi</label>
          <input type="text" name="peringkat_prestasi" class="form-control" id="exampleInputPassword1" placeholder="Peringkat Prestasi">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Tahun Prestasi</label>
          <input type="text" name="tahun_prestasi" class="form-control" id="exampleInputPassword1" placeholder="Tahun Prestasi">
        </div>
      </div>
    </div>


    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>

@endsection