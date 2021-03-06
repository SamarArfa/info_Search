<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>لوحه تحكم الموقع

        @yield('title')</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ Request::root() }}/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.pannellum.org/2.4/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.pannellum.org/2.2/pannellum.js"></script>

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photo-sphere-viewer@4/dist/photo-sphere-viewer.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/three/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uevent@2/browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/photo-sphere-viewer@4/dist/photo-sphere-viewer.min.js"></script>
    

    <style type="text/css">
        #panorama {
            width: 600px;
            height: 400px;
            margin: 50px auto;
        }
        #viewer {
      width: 30vw;
      height: 60vh;
  }

  #map {
        width: 75%;
        height:400px;
        background-color: grey;
  }
    </style>
   
    @yield('header')
    {{-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">  --}}

    @toastr_css

    <style>
        .material-icons { font-size: 15px; }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">الرئيسية</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline mr-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav pull-left ">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                {{-- <a href="#" class="dropdown-item"> --}}
                    <!-- Message Start -->
                    <div class="">
                     
                        <div class="">
                           <a href="{{ url('admin/Adminpanel/unreadMessage') }}">
                             <h3 class="dropdown-item-title">
                                <span class="text-sm float-right"></span>
                            </h3></a>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i></p>
                        </div>
                       
                        <span class="text-sm float-right">لا يوجد رسائل جديدة </span>

                    </div>
                    <!-- Message End -->
                {{-- </a> --}}
            
                <a href="{{ url('admin/Adminpanel/unreadMessage') }}" class="dropdown-item dropdown-footer">See All Messages</a>
            </div> 
        </li>
        <!-- Notifications Dropdown Menu -->
       
    </ul>

    <li class="nav-item dropdown " style="list-style: none;">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:black;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
         

        </div>
       
    </li> 
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/Adminpanel')}}" class="brand-link">
      
        <span class="brand-text font-weight-light "> لوحة تحكم الموقع </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
<span style="color:white; margin-right:10px;"></span>
            </div>
        
           
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
القائمة الرئيسية
           @include('/layout/nav')

      </ul></nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



<div class="content-wrapper">
    @yield('content')

</div>


<footer style="text-align: center" class="main-footer">
    <strong >Copyright &copy; 2020 
        {{-- <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.2
    </div> --}}
 
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

</div>
<!-- jQuery -->
<script src="{{ Request::root() }}/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ Request::root() }}/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ Request::root() }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ Request::root() }}/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ Request::root() }}/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ Request::root() }}/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ Request::root() }}/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ Request::root() }}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ Request::root() }}/admin/plugins/moment/moment.min.js"></script>
<script src="{{ Request::root() }}/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ Request::root() }}/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ Request::root() }}/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ Request::root() }}/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ Request::root() }}/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ Request::root() }}/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ Request::root() }}/admin/dist/js/demo.js"></script>

@yield('footer')

@stack('js')
@jquery
@toastr_js
@toastr_render
</body>

</html>


