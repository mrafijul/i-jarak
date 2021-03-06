<DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
    <title>I-Jarak | {{ $name }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="{{ asset("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="{{ asset("ionicons-2.0.1/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="{{ asset("dist/css/AdminLTE.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset("dist/css/skins/_all-skins.min.css" ) }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset("plugins/iCheck/flat/blue.css" ) }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset("plugins/morris/morris.css") }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset("plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset("plugins/datepicker/datepicker3.css") }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset("plugins/daterangepicker/daterangepicker-bs3.css") }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
         <span class="logo-mini"><b>i</b>Jarak</span> 
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>i</b>Jarak</span> 
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
     <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Admin</p>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="../../index">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../user"><i class="fa fa-circle-o"></i>Users </a></li>
                <li><a href="../../laporan"><i class="fa fa-circle-o"></i>Laporan</a></li>
                <li><a href="../../stum"><i class="fa fa-circle-o"></i>Mobil Stum</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Input Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../stum/create"><i class="fa fa-circle-o"></i> Mobil Stum</a></li>
                <li><a href="../../laporan/create"><i class="fa fa-circle-o"></i> Laporan Kerusakan Jalan</a></li>
                <li><a href="../../user/create"><i class="fa fa-circle-o"></i> Data User</a></li>
                <li><a href="../../jadwal"><i class="fa fa-circle-o"></i>Jadwal</a></li>
              </ul>
            </li>
           <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i><span>Charts</span>
              </a>
            </li>
            </section>
        <!-- /.sidebar -->
      </aside>
        

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>
        

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h1 class="box-title">{{$name}}</h2>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                 @yield('content')   
    
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
      </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset("plugins/jQuery/jQuery-2.1.4.min.js") }}" type="text/javascript" ></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="{{ asset("dist/js/jquery-ui.min.js") }}" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="{{ asset("dist/js/raphael-min.js") }}" type="text/javascript" ></script>
    <script src="{{ asset("plugins/morris/morris.min.js") }}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{{ asset("plugins/sparkline/jquery.sparkline.min.js") }}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{{ asset("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset("plugins/knob/jquery.knob.js") }}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{{ asset("dist/js/moment.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("plugins/daterangepicker/daterangepicker.js") }}" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="{{ asset("plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="{{ asset("plugins/slimScroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ asset("plugins/fastclick/fastclick.min.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("dist/js/app.min.js") }}" type="text/javascript"></script>    
    
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset("dist/js/pages/dashboard.js") }}" type="text/javascript"></script>    
    
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset("dist/js/demo.js") }}" type="text/javascript"></script>
  </body>
</html>