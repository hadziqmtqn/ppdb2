@extends('dashboard.layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
               
                <form role="form" method="post" action="{{ url('profile-sekolah') }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Kemenag Pusat</label>
                      <input type="text" name="kemenag_pusat" class="form-control" id="exampleInputEmail1" placeholder="Kemenag Pusat" value="{{ $dt->kemenag_pusat }}">
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kemenag Kabupaten/Kota</label>
                      <input type="text" name="kemenag_kabko" class="form-control" id="exampleInputPassword1" placeholder="No Telp" value="{{ $dt->kemenag_kabko }}">
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Madrasah</label>
                      <input class="form-control" name="nama" id="exampleInputPassword1" placeholder="Nama Madrasah" value="{{ $dt->nama }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Madrasah</label>
                      <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Nama Sekolah" value="{{ $dt->alamat }}">
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputPassword1">No Telp</label>
                      <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="No Telp" value="{{ $dt->no_telp }}">
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Website</label>
                      <input class="form-control" name="website" id="exampleInputPassword1" placeholder="Nama Website" value="{{ $dt->website }}">
                    </div>
 
                    <div class="form-group">
                      <label for="exampleInputFile">Logo Sekolah</label>
                      <input type="file" name="photo" id="exampleInputFile">
     
                      
                    </div>
                   
                  </div>
                  <!-- /.box-body -->
     
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