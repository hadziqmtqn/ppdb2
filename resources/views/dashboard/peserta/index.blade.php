@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
 
                    <a href="{{ url('peserta') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> All Peserta</a>
 
                    <a href="{{ url('peserta/verifikasi') }}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-refresh"></i> Di verifikasi</a>
 
                    <a href="{{ url('peserta/belum-verifikasi') }}" class="btn btn-sm btn-flat btn-danger"><i class="fa fa-refresh"></i> Belum Di verifikasi</a>
 
                    <a href="{{ url('peserta/belum-verifikasi') }}" class="btn btn-sm btn-flat btn-info btn-import"><i class="fa fa-upload"></i> Import Nilai</a>
                </p>
            </div>
            <div class="box-body">
               
                <div class="table-responsive">
                    <table id="table-datatables" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>ID Registrasi</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>NIK</th>
                                <th>No HP</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Anak Ke</th>
                                <th>Jumlah Saudara</th>
                                <th>Hobi</th>
                                <th>Cita-cita</th>
                                <th>Asal Sekolah</th>
                                <th>NPSN Sekolah Asal</th>
                                <th>Nama Sekolah Asal</th>
                                <th>Alamat Sekolah Asal</th>
                                <th>Siswa Tinggal</th>
                                <th>Alamat Siswa</th>
                                <th>Propinsi</th>
                                <th>Kabupaten/Kota</th>
                                <th>Desa/Kelurahan</th>
                                <th>Kodepos</th>
                                <th>Jarak</th>
                                <th>Transportasi</th>
                                <th>No KK</th>
                                <th>Nama Ayah</th>
                                <th>NIK Ayah</th>
                                <th>Tempat Lahir Ayah</th>
                                <th>Tanggal Lahir Ayah</th>
                                <th>Status Ayah</th>
                                <th>Pendidikan Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Nama Ibu</th>
                                <th>NIK Ibu</th>
                                <th>Tempat Lahir Ibu</th>
                                <th>Tanggal Lahir Ibu</th>
                                <th>Status Ibu</th>
                                <th>Pendidikan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Nama Wali</th>
                                <th>NIK Wali</th>
                                <th>Tempat Lahir Wali</th>
                                <th>Tanggal Lahir Wali</th>
                                <th>Status Wali</th>
                                <th>Pendidikan Wali</th>
                                <th>Pekerjaan Wali</th>
                                <th>Penghaslan Ortu</th>
                                <th>No KKS</th>
                                <th>No PKH</th>
                                <th>No KIP</th>
                                <th>Status Rumah Ortu</th>
                                <th>Alamat Ortu</th>
                                <th>Propinsi</th>
                                <th>Kabupaten/Kota ortu</th>
                                <th>Desa/Kelurahan Ortu</th>
                                <th>Kodepos Ortu</th>
                                <th>Nilai Agama 5.1</th>
                                <th>Nilai Agama 5.2</th>
                                <th>Nilai Agama 6.1</th>
                                <th>Nilai BIN 5.1</th>
                                <th>Nilai BIN 5.2</th>
                                <th>Nilai BIN 6.1</th>
                                <th>Nilai MAT 5.1</th>
                                <th>Nilai MAT 5.2</th>
                                <th>Nilai MAT 6.1</th>
                                <th>Nilai IPA 5.1</th>
                                <th>Nilai IPA 5.2</th>
                                <th>Nilai IPA 6.1</th>
                                <th>Nilai IPS 5.1</th>
                                <th>Nilai IPS 5.2</th>
                                <th>Nilai IPS 6.1</th>
                                <th>Prestasi</th>
                                <th>Tingkat Prestasi</th>
                                <th>Peringkat Prestasi</th>
                                <th>Tahun Prestasi</th>
                                <th>Sudah Lengkap??</th>
                                <th>Sudah Diverifikasi??</th>
                                <th>Apakah Lulus??</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $e=>$dt)
                            <tr>
                                <td>{{ $e+1 }}</td>
                                <td>
                                        <div style="width:60px">
                                            @if($dt->is_lulus == 1)
                                            <a target="_blank" href="{{ url('peserta/export/'.$dt->id) }}" class="btn btn-primary btn-xs btn-edit" id="edit"><i class="fa fa-download"></i></a>
                                            @endif
                                            
                                            <a href="{{ url('peserta/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a>
 
                                            <button href="{{ url('peserta/'.$dt->id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                </td>

                                
                                {{-- <td>
                                    <img src="{{ asset($dt->photo) }}" style="width: 100px;">
                                </td> --}}
                                <td>{{ $dt->id_registrasi }}</td>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->nisn }}</td>
                                <td>{{ $dt->biodata_r->nik }}</td>
                                <td>{{ $dt->biodata_r->no_hp }}</td>
                                <td>{{ $dt->jenis_kelamins->nama }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir }}</td>
                                <td>{{ $dt->biodata_r->agama }}</td>
                                <td>{{ $dt->biodata_r->anak_ke }}</td>
                                <td>{{ $dt->biodata_r->jumlah_saudara }}</td>
                                <td>{{ $dt->biodata_r->hobi }}</td>
                                <td>{{ $dt->biodata_r->cita_cita }}</td>
                                <td>{{ $dt->biodata_r->asal_sekolah }}</td>
                                <td>{{ $dt->biodata_r->npsn_asal }}</td>
                                <td>{{ $dt->biodata_r->nama_sek_asal }}</td>
                                <td>{{ $dt->biodata_r->alamat_sek_asal }}</td>
                                <td>{{ $dt->biodata_r->jenis_siswa_tinggal }}</td>
                                <td>{{ $dt->biodata_r->alamat_siswa }}</td>
                                <td>{{ $dt->biodata_r->propinsi_siswa }}</td>
                                <td>{{ $dt->biodata_r->kabkota_siswa }}</td>
                                <td>{{ $dt->biodata_r->desa_kelurahan_siswa }}</td>
                                <td>{{ $dt->biodata_r->kodepos_siswa }}</td>
                                <td>{{ $dt->biodata_r->jarak }}</td>
                                <td>{{ $dt->biodata_r->transportasi }}</td>
                                <td>{{ $dt->biodata_r->no_kk }}</td>
                                <td>{{ $dt->biodata_r->nama_ayah }}</td>
                                <td>{{ $dt->biodata_r->nik_ayah }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir_ayah }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir_ayah }}</td>
                                <td>{{ $dt->biodata_r->status_ayah }}</td>
                                <td>{{ $dt->biodata_r->pendidikan_ayah }}</td>
                                <td>{{ $dt->biodata_r->pekerjaan_ayah }}</td>
                                <td>{{ $dt->biodata_r->nama_ibu }}</td>
                                <td>{{ $dt->biodata_r->nik_ibu }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir_ibu }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir_ibu }}</td>
                                <td>{{ $dt->biodata_r->status_ibu }}</td>
                                <td>{{ $dt->biodata_r->pendidikan_ibu }}</td>
                                <td>{{ $dt->biodata_r->pekerjaan_ibu }}</td>
                                <td>{{ $dt->biodata_r->nama_wali }}</td>
                                <td>{{ $dt->biodata_r->nik_wali }}</td>
                                <td>{{ $dt->biodata_r->tempat_lahir_wali }}</td>
                                <td>{{ $dt->biodata_r->tanggal_lahir_wali }}</td>
                                <td>{{ $dt->biodata_r->status_wali }}</td>
                                <td>{{ $dt->biodata_r->pendidikan_wali }}</td>
                                <td>{{ $dt->biodata_r->pekerjaan_wali }}</td>
                                <td>{{ $dt->biodata_r->penghasilan_ortu }}</td>
                                <td>{{ $dt->biodata_r->no_kks }}</td>
                                <td>{{ $dt->biodata_r->no_pkh }}</td>
                                <td>{{ $dt->biodata_r->no_kip }}</td>
                                <td>{{ $dt->biodata_r->status_rumah_ortu }}</td>
                                <td>{{ $dt->biodata_r->alamat_ortu }}</td>
                                <td>{{ $dt->biodata_r->propinsi_ortu }}</td>
                                <td>{{ $dt->biodata_r->kabkota_ortu }}</td>
                                <td>{{ $dt->biodata_r->desa_kelurahan_ortu }}</td>
                                <td>{{ $dt->biodata_r->kodepos_ortu }}</td>
                                <td>{{ $dt->nilais->agama_5_1 }}</td>
                                <td>{{ $dt->nilais->agama_5_2 }}</td>
                                <td>{{ $dt->nilais->agama_6_1 }}</td>
                                <td>{{ $dt->nilais->bahasa_5_1 }}</td>
                                <td>{{ $dt->nilais->bahasa_5_2 }}</td>
                                <td>{{ $dt->nilais->bahasa_6_1 }}</td>
                                <td>{{ $dt->nilais->matematika_5_1 }}</td>
                                <td>{{ $dt->nilais->matematika_5_2 }}</td>
                                <td>{{ $dt->nilais->matematika_6_1 }}</td>
                                <td>{{ $dt->nilais->ipa_5_1 }}</td>
                                <td>{{ $dt->nilais->ipa_5_2 }}</td>
                                <td>{{ $dt->nilais->ipa_6_1 }}</td>
                                <td>{{ $dt->nilais->ips_5_1 }}</td>
                                <td>{{ $dt->nilais->ips_5_2 }}</td>
                                <td>{{ $dt->nilais->ips_6_1 }}</td>
                                <td>{{ $dt->prestasis->prestasi }}</td>
                                <td>{{ $dt->prestasis->tingkat_prestasi }}</td>
                                <td>{{ $dt->prestasis->peringkat_prestasi }}</td>
                                <td>{{ $dt->prestasis->tahun_prestasi }}</td>
                                @if($dt->biodata_r_count > 0)
                                <td>
                                    <label class="label label-success">Sudah Lengkap</label>
                                </td>
                                @else
                                <td>
                                    <label class="label label-danger">Belum Lengkap</label>
                                </td>
                                @endif
 
                                @if($dt->is_verifikasi == 1)
                                <td>
                                    <label class="label label-success">Sudah Diverifikasi</label>
                                </td>
                                @else
                                <td>
                                    <label class="label label-danger">Belum Diverifikasi</label>
                                </td>
                                @endif

                                <td>
                                    @if($dt->is_lulus == null)
                                    <a href="{{ url('peserta/'.$dt->id.'/lulus') }}" class="btn btn-xs btn-primary">Hasil Seleksi</a>
                                    @else
                                    <label class="label label-info">Diterima</label>
                                    @endif
                                </td>
 
                                {{-- <td>
                                    <p>
                                        <a href="{{ asset($dt->biodata_r->ijazah) }}" class="btn btn-xs btn-success" download="">Download Ijazah</a>
 
                                        <a href="{{ asset($dt->biodata_r->ktp) }}" class="btn btn-xs btn-warning" download="">Download KTP</a>
                                    </p>
                                </td> --}}

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
 
            </div>
        </div>
    </div>
</div>

<!-- modal import -->
<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
  <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">

      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">

        <form role="form" method="post" action="{{ url('peserta/excel') }}" enctype="multipart/form-data">
            @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" name="sample_file" id="exampleInputFile">

              <p class="help-block">Example block-level help text here.</p>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <p>
                <button type="submit" class="btn btn-primary">Submit</button>

                <a href="{{ asset('import_nilai.xls') }}" class="btn btn-success" download=""><i class="fa fa-download"></i> Download Template</a>
            </p>
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

        // btn import
        $('.btn-import').click(function(e){
            e.preventDefault();
            $('#modal-import').modal();
        })
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
<script type="text/javascript"> 
    $(document).ready(function () {
        $('#table-datatables').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>
 
@endsection