<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cvmama - Online CV Maker</title>

    <!-- Bootstrap Core CSS -->
    
    
    
    <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/panel/css/style.css')}}">


    <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/bootstrap/css/bootstrap.css')}}">



    
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="{{URL::to('/')}}">cvmama</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

       @yield('content')
        <!-- /.row -->





    </div>
    <!-- /.container -->


    

   
    <script type="text/javascript" src="{{secure_asset('assets/bootstrap/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    
 

    <script type="text/javascript" src="{{secure_asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>



    <script type="text/javascript" src="{{secure_asset('assets/panel/js/main.js')}}"></script>

</body>

</html>
