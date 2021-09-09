<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        

        <li class="menu-sidebar"><a href="{{ url('/dashboard') }}"><span class="fa fa-home"></span> Beranda</span></a></li>

        @if(\Auth::user()->is_lulus == 1)
        <li class="menu-sidebar"><a href="{{ url('/biodata') }}"><span class="fa fa-edit"></span> Daftar Ulang</span></a></li>
        <li class="menu-sidebar"><a target="_blank" href="{{ url('/cetak-pendaftaran') }}"><span class="fa fa-print"></span> Cetak Daftar Ulang</span></a></li>
        @else
        <!-- <li class="menu-sidebar"><a href="{{ url('/biodata') }}"><span class="fa fa-edit"></span> Biodata</span></a></li> -->
        @endif

        <li class="menu-sidebar"><a href="{{ url('/pesan') }}"><span class="fa fa-book"></span> Pesan</span></a></li>


        @if(\Auth::user()->role == 1)
        <li class="menu-sidebar"><a href="{{ url('/verifikasi') }}"><span class="fa fa-id-card"></span> Verifikasi</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/peserta') }}"><span class="fa fa-user-circle"></span> Data Peserta</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/laporan-nilai') }}"><span class="fa fa-user-circle"></span> Laporan Nilai</span></a></li>

        <li class="menu-sidebar"><a href="{{ url('/profile-sekolah') }}"><span class="fa fa-university"></span> Update Profile Sekolah</span></a></li>
        @endif
        

        <li class="header">SYSTEM</li>

        <li class="menu-sidebar"><a href="{{ url('/ganti-password') }}"><span class="glyphicon glyphicon-log-out"></span> Ganti Password</span></a></li>

        @if(\Auth::user()->role == 1)
        <li class="menu-sidebar"><a href="{{ url('/jadwal') }}"><span class="glyphicon glyphicon-log-out"></span> Jadwal PPDB</span></a></li>
        @endif

        <li class="menu-sidebar"><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>