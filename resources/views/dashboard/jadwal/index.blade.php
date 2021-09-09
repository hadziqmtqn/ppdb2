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
               
                <form role="form" method="post" action="{{ url('jadwal') }}">
                    {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Awal</label>
                      <input type="text" name="awal" class="form-control datepicker" autocomplete="off" id="exampleInputEmail1" value="{{ $awal }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanggal Akhir</label>
                      <input type="text" name="akhir" autocomplete="off" class="form-control datepicker" id="exampleInputPassword1" value="{{ $akhir }}">
                    </div>
                  </div>
                  <!-- /.box-body -->
     
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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