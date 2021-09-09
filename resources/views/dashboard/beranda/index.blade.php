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

             @if(\Auth::user()->role == 1)
        <div class="row">
          <div class="col-md-15 col-sm-3">
            <!-- small box -->
            <div class="small-box bg-info" style="background:#17a2b8">
              {{-- <div style="background:#5f07ff"></div> --}}
              <div class="inner">
                <h3>{{ $jumlah_peserta }}</h3>

                <p>Jumlah Pendaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-15 col-sm-3">
            <!-- small box -->
            <div class="small-box bg-success" style="background:#28a745">
              <div class="inner">
                <h3>{{ $jumlah_laki }}</h3>

                <p>Laki-laki</p>
              </div>
              <div class="icon">
                <i class="ion ion-male"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-15 col-sm-3">
            <!-- small box -->
            <div class="small-box bg-warning" style="background:#7da7d9">
              <div class="inner">
                <h3>{{ $jumlah_perempuan }}</h3>

                <p>Perempuan</p>
              </div>
              <div class="icon">
                <i class="ion ion-female"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-15 col-sm-3">
            <!-- small box -->
            <div class="small-box bg-danger" style="background:#dc3545">
              <div class="inner">
                <h3>{{ $jumlah_sd }}</h3>

                <p>SD</p>
              </div>
              <div class="icon">
                <i class="ion ion-university"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <div class="col-md-15 col-sm-3">
            <!-- small box -->
            <div class="small-box bg-danger" style="background:#48d931">
              <div class="inner">
                <h3>{{ $jumlah_mi }}</h3>

                <p>MI</p>
              </div>
              <div class="icon">
                <i class="ion ion-university"></i>
              </div>
              {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
            </div>
          </div>
          <!-- ./col -->
        </div>

        @endif
               
               @if(\Auth::user()->role == null)
               {{-- <div class="container"> --}}
                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <h4><b>{{ $pesan }}</b></h4>
                        </center>
 
                        @if($cek > 0)
                        <p>
                            <center>
                                <a target="_blank" href="{{ url('cetak-biodata') }}" class="btn btn-flat btn-success">Cetak Bukti Pendaftaran</a>
                            </center>
                        </p>
                        @endif
                    </div>

                    <div class="col-md-4">
                        <center>
                            <h4><b>{{ $status }}</b></h4>
                        </center>
                    </div>

                    <div class="col-md-4">
                        <center>
                            <h4><b>{{ $pesan_lulus }}</b></h4>
                        </center>
                    </div>

                </div>
                @endif
 
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