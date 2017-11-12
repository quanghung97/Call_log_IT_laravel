<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spec IT request V1.0</title>

    <!-- Bootstrap Core CSS -->
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- MetisMenu CSS -->
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/metisMenu/metisMenu.min.css') }}">
    <!-- Custom CSS -->
    
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/dist/css/sb-admin-2.css') }}">
    <!-- Morris Charts CSS -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/morrisjs/morris.css') }}">
    <!-- Custom Fonts -->
  
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            @yield('sidebar')
            
            <!-- /.navbar-static-side -->
        </nav>
        
        
        
<!--main noi dung-->
    <div id="page-wrapper" class="page-content" style="background: white;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="content sm-gutter">
            <ul class="breadcrumb">
                <li>
                    <p>TRANG CHỦ</p>
                </li>
                <li><a href="#" class="active">@yield('name_page')</a></li>
            </ul>
            @yield('main')
        </div>
    </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
    <script src="{{ URL::asset('public/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    
    <script src="{{ URL::asset('public/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    
    <script src="{{ URL::asset('public/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <!-- Morris Charts JavaScript -->
    
    <script src="{{ URL::asset('public/vendor/raphael/raphael.min.js') }}"></script>
    
    
    <script src="{{ URL::asset('public/vendor/morrisjs/morris.min.js') }}"></script>
    
   
    <script src="{{ URL::asset('public/data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    
    <script src="{{ URL::asset('public/dist/js/sb-admin-2.js') }}"></script>
</body>

</html>