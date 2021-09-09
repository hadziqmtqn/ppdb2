<!-- Logo -->
<?php
  $dt = \App\User::where('id',\Auth::user()->id)->first();
?>
<a href="{{ url('/dashboard') }}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>PP</b>DB</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>{{ \Auth::user()->name }}</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      
      <li class="dropdown user user-menu">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">
          {{-- <img src="{{asset('adminlte/madrasah.png')}}" class="user-image" alt="User Image"> --}}
          <span class="hidden-xs">{{\Auth::user()->name}}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            {{-- <img src="{{asset('adminlte/madrasah.png')}}" class="img-circle" alt="User Image"> --}}

            <p>
              {{\Auth::user()->name}}
              <small>{{ \Auth::user()->name }}</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="{{ url('admin/profile') }}" class="btn btn-default btn-flat menu-sidebar">Profile</a>
            </div>
            <div class="pull-right">
            <a href="{{ url('keluar') }}" class="btn btn-default btn-flat menu-sidebar">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
      
    </ul>
  </div>

</nav>