<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dewadev | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/frontend/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/dist/css/skins/_all-skins.min.css') }}">
  <link rel="icon" href="{{ asset('assets/logo/dewadev-only.png') }}" type="image/x-icon">
</head>
<style>
    .fz-30{font-size: 30pt !important;}
    .fz-27{font-size: 27pt !important;}
    .fz-24{font-size: 24pt !important;}
    .fz-13{font-size: 13pt !important;}
    .fz-12{font-size: 12pt !important;}
    .fz-10{font-size: 10pt !important;}

    .mt-2{
        margin-top: 20px
    }

    ._btn-custom{
        border: 2px solid #e1e1e1; 
        padding-left: 8px;
        padding-right: 8px;
        color: #000;
        border-radius: 10px;
        font-family: 'inter-regular'
    }

    ._btn-custom-nobg{
        border: 2px solid #57606f; 
        padding-left: 8px;
        padding-right: 8px;
        color: #ffffff;
        border-radius: 10px;
        font-family: 'inter-regular';
        background-color: transparent;
        margin-right: -20px;
    }

    .text-white{
        color: white !important;
    }

    .text-grey{
        color: #ced6e0 !important;
    }

    .inter-regular{
        font-family: 'inter-regular'
    }

    @font-face {
        font-family: 'inter-regular';
        src: url('/assets/fonts/Inter-Regular.ttf') format('truetype');
    }
    
    .inter-medium{
        font-family: 'inter-medium'
    }

    @font-face {
        font-family: 'inter-medium';
        src: url('/assets/fonts/Inter-Medium.ttf') format('truetype');
    }

    .inter-bold{
        font-family: 'inter-bold'
    }

    @font-face {
        font-family: 'inter-bold';
        src: url('/assets/fonts/Inter-Bold.ttf') format('truetype');
    }

    .inter-semibold{
        font-family: 'inter-semibold'
    }

    @font-face {
        font-family: 'inter-semibold';
        src: url('/assets/fonts/Inter-SemiBold.ttf') format('truetype');
    }

    .br-1{
        border-right: 1px solid #57606f;
        margin-top: 13px;
        padding-right: 14px;
    }

    .list-icon{width: 19px;margin-right: 10px}

    .logo-lg>img{width: 80%;float: left;margin-top: 10px}
    .logo-mini>img{width: 65%;margin-left: 17px}

    .sidebar-toggle{color: #57606f !important}
    .img-banner{width: 100%;border-radius: 10px}

    .search-field{
        background-color: transparent;
        border: 1px solid #57606f;
        width: 300px;
        padding: 4px;
        /* margin-top: 13px; */
        border-radius: 5px;
        color: white;
        font-family: 'inter-medium';
    }

    select.form-control{
        background-color: #000
    }

    .filtering{
        border: 2px solid #1e272e;
        width: 100%;
        background-color: transparent;
        border-radius: 10px
    }

    .main-sidebar{
        margin-top: -45px;
        z-index: 99999 !important;
    }

    .arrow-detail{
        width: 10px;
        margin-left: 10px;
        cursor: pointer
    }

    .arrow-detail-item{
        width: 8px;
        margin-left: 4px;
        cursor: pointer
    }

    .content-header{
        background-image: url('/assets/bg/line.png') !important;
        background-size: cover !important;
        padding-bottom: 51px !important;
        background-repeat: no-repeat !important;
    }

    .content-header-detail{
        background-image: url('/assets/bg/line-detail.png') !important;
        background-size: cover !important;
        padding-bottom: 51px !important;
        background-repeat: no-repeat !important;
        margin-top: -20px;
    }

    .content-header-detail > h1{
        padding-top: 20px;
    }

    /* Custom Scroll Bar for WebKit Browsers */
    ::-webkit-scrollbar {
        width: 12px; /* Width of the entire scrollbar */
    }

    ::-webkit-scrollbar-track {
        background: #1e272e; /* Color of the track */
    }

    ::-webkit-scrollbar-thumb {
        background-color: #2c3e50; /* Color of the thumb */
        border-radius: 10px; /* Roundness of the thumb */
        border: 3px solid #1e272e; /* Padding around the thumb */
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #34495e; /* Color of the thumb when hovered */
        cursor: pointer;
    }

    .image-container {
        position: relative;
        display: inline-block; /* Keep the container size according to the image */
    }

    .image-container > .label-custom {
        position: absolute;
        top: 10px; /* Adjust the vertical position of the label */
        left: 10px; /* Adjust the horizontal position of the label */
        background-color: #3c40c6;
        padding: 5px; /* Optional: padding around the text */
        font-size: 12px; /* Adjust font size as needed */
        color: #34e7e4; /* Adjust text color as needed */
        z-index: 1; /* Ensure the label is above the image */
        border-radius: 5px;
        font-family: 'inter-semibold'
    }

    .image-container > .label-custom-free {
        position: absolute;
        top: 10px; /* Adjust the vertical position of the label */
        left: 10px; /* Adjust the horizontal position of the label */
        background-color: #32ff7e;
        padding: 5px; /* Optional: padding around the text */
        font-size: 12px; /* Adjust font size as needed */
        color: #218c74; /* Adjust text color as needed */
        z-index: 1; /* Ensure the label is above the image */
        border-radius: 5px;
        font-family: 'inter-semibold'
    }

    .image-container > img {
        display: block;
        width: 100%; /* Ensure the image is responsive */
        height: auto;
    }

    /* detail page */
    .feature-container{
        margin-top: 10px;
        border: 1px dashed #353b48;
        padding: 20px;
        color: white;
    }

    .feature-heading{
        font-family: 'inter-semibold';
        color: white;
        font-size: 16pt;
    }

    .feature-title{
        font-family: 'inter-semibold';
        color: white;
        font-size: 12pt;
        margin-top: 15px;
    }
    
    .feature-container > ul > li{
        list-style: none;
        font-family: 'inter-regular';
        margin-left: -40px;
        margin-top: 5px;
    }

    .feature-description{
        display: block;
        color: white;
        font-family: 'inter-regular'
    }

    .icon-check{
        width: 10px;
        margin-right: 10px;
    }

    ._btn-download{
        background-color: transparent;
        border: 1px solid #44bd32;
        padding: 10px;
        border-radius: 5px;
        font-size: 12pt;
        font-family: 'inter-medium';
        margin-top: 10px;
        color: #44bd32
    }

    ._btn-contact{
        background-color: #3c40c6;
        border: 1px solid #3c40c6;
        padding: 10px;
        border-radius: 5px;
        font-size: 12pt;
        font-family: 'inter-medium';
        margin-top: 10px;
        width: 100%;
        display: block
    }

    ._btn-contact > img{
        width: 18px;
        margin-right: 5px;
    }

    ._btn-cart{
        margin-left: 5px;
        background-color: transparent;
        border: 1px dashed white;
        padding: 10px;
        border-radius: 5px;
        font-size: 12pt;
        font-family: 'inter-medium';
        margin-top: 10px;
    }

    ._btn-cart:hover{
        border: 1px dashed #fff200;
        color: #fff200;
    }

    .line{
        margin-top: 20px;
        margin-bottom: 10px;
        width: 100%;
        height: 2px;
        border: 1px dashed #1e272e;
    }

    .detail-date{
        margin-top: 20px
    }

</style>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    {{-- <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="{{ asset('assets/logo/dewadev-only.png') }}" alt="">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="{{ asset('assets/logo/dewadev.png') }}" alt="">
      </span>
    </a> --}}
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown br-1">
            <div class="dropdown-toggle" data-toggle="dropdown">
              <input type="text" class="search-field" placeholder="Cari sistem apa?">
            </div>
          </li>
          {{-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs text-grey inter-regular">
                Request Project
              </span>
            </a>
          </li> --}}
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <button class="_btn-custom-nobg">Upload</button>
            </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <button class="_btn-custom">Masuk</button>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="display: none">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs inter-regular">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p class="inter-regular">
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="/" class="inter-medium text-white">
            <img class="list-icon" src="{{ asset('assets/icons/list/semua.png') }}" alt=""> <span>Semua</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#" class="inter-medium text-white">
            <img class="list-icon" src="{{ asset('assets/icons/list/perusahaan.png') }}" alt=""> <span>Perusahaan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#" class="inter-medium text-white">
            <img class="list-icon" src="{{ asset('assets/icons/list/dinas.png') }}" alt=""> <span>Dinas</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#" class="inter-medium text-white">
            <img class="list-icon" src="{{ asset('assets/icons/list/sekolah.png') }}" alt=""> <span>Sekolah</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#" class="inter-medium text-white">
            <img class="list-icon" src="{{ asset('assets/icons/list/kuliah.png') }}" alt=""> <span>Kuliah</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#" class="inter-medium text-white">
            <img class="list-icon" src="{{ asset('assets/icons/list/hot.png') }}" alt=""> <span>Hot</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#" class="inter-medium text-white">
            <img class="list-icon" src="{{ asset('assets/icons/list/toko.png') }}" alt=""> <span>Toko</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('assets/frontend/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('assets/frontend/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('assets/frontend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/frontend/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/frontend/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/frontend/dist/js/demo.js') }}"></script>

<script>
    $(document).keydown(function(e) {
        if (e.ctrlKey && e.keyCode === 66) {
            e.preventDefault(); // Prevent the default browser behavior
            $('.sidebar-toggle').trigger('click');
        }
    });
</script>
</body>
</html>
