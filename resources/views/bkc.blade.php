<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BKC Antiques and Auctions</title>

    <!-- Bootstrap -->
    <link href="{{asset('admin_asset/cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css')}}">
    <link href="{{asset('admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin_asset/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin_asset/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="{{asset('admin_asset/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin_asset/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('admin_asset/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"> <span>BKC Forum</span></a>
            </div>
            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                <ul class="nav side-menu">
                @foreach($categories as $categories)
                    <li><a>{{$categories->name }} <span class="fa fa-terminal"></span> </a></li>
                @endforeach
                </ul>
                </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="login" href="{{url('login')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons --> 
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a href="{{url('/')}}">BKC</a>
                </div>
                <div class="nav toggle">
                  <a href="{{url('/')}}">Home</a>
                </div>
                <div class="nav toggle">
                  <a>Shop</a>
                </div>
                <div class="nav toggle">
                  <a href="{{url('/news')}}">News</a>
                </div>
                <div class="nav toggle">
                  <a href="{{url('/contact')}}">Contact</a>
                </div>
                <div class="nav toggle">
                  <a href="{{url('/about_us')}}">About_us</a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="{{url('login')}}"> Login </a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
          @yield('bkc')
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('admin_asset/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
   <script src="{{asset('admin_asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin_asset/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('admin_asset/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('admin_asset/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Dropzone.js -->
    <script src="{{asset('admin_asset/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>
    <!-- jQuery Smart Wizard -->
    <script src="{{asset('admin_asset/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin_asset/build/js/custom.min.js')}}"></script>
  </body>
</html>