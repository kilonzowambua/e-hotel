<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin::Managedishes</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('adminasset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel=stylesheet media=all">
    <link href="{{ url('adminasset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ url('adminasset/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ url('adminasset/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ url('adminasset/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="icon" type="image/png" href="{{url('adminasset/images/icon/icon.png')}}" />

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ url('/home')}}">
                            <img src="{{ url('adminasset/images/icon/logo.png')}}" alt="E-hotel" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ url('/home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                         
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Client</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/create')}}">Add client</a>
                                </li>
                                <li>
                                    <a href="{{ url('/manageclients')}}">Manage client</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Staff</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{url('/createstaff')}}">Add staff</a>
                                </li>
                                <li>
                                    <a href="{{ url('/managestaffs')}}">Manage staff</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Food</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/createfood')}}">Add dish</a>
                                </li>
                                <li>
                                    <a href="{{ url('/managedish')}}">Manage dish</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Room</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/createroom')}}">Add room</a>
                                </li>
                                <li>
                                    <a href="{{ url('/managerooms')}}">Manage room</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>All orders</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/allrooms')}}">Make order</a>
                                </li>
                                <li>
                                    <a href="{{ url('/vieworder')}}">View orders</a>
                                </li>
                               
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{url('adminasset/images/icon/logo.png')}}" alt="E-hotel" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ url('/home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                     
                        <li class="has-sub active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-group"></i>Clients</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/create')}}">Add new client</a>
                                </li>
                                <li>
                                    <a href="{{ url('/manageclients')}}">Manage client</a>
                                </li>
                           
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-group"></i>Staff</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/createstaff')}}">Add staff</a>
                                </li>
                                <li>
                                    <a href="{{ url('/managestaffs')}}">Manage staff</a>
                                </li>
                              
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas  fa-coffee"></i>Foods</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/createfood')}}">Add new dish</a>
                                </li>
                                <li>
                                    <a href="{{ url('/managedish')}}">Manage dish</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="has-sub ">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-home"></i>Rooms</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/createroom')}}">Add room</a>
                                </li>
                                <li>
                                    <a href="{{ url('/managerooms')}}">Manage rooms</a>
                                </li>
                              
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tasks"></i>All orders</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/allrooms')}}">Make order</a>
                                </li>
                                <li>
                                    <a href="{{ url('/vieworder')}}">View orders</a>
                                </li>
                              
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
      <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
                       @foreach ($food as $food)
                                 <div class="col-md-4">
                                <div class="card">
                                    <img class="foodimg" src="{{ url('foodimages')}}/{{$food->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">{{ $food->foodname }}</h4>
                                        <p class="card-text"><u>Ingredients:</u><br>{{ $food->ingredients }}
                                        </p>
                                         <button type="button" class="btn btn-warning" >
                                                        <a href="{{ url('/viewsingledish',$food->foodid) }}">
                                                        <i class="fa fa-edit"></i>update   
                                                        </button>
                                                      
                                                      
                                            <button type="button" class="btn btn-danger">
                                            <a href="{{ url('/deletedish',$food->foodid) }}">
                                            <i class="fa fa-trash"></i>Delete</button> 
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            
   
         <!-- Jquery JS-->
    <script src="{{ url('adminasset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ url('adminasset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ url('adminasset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ url('adminasset/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ url('adminasset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/sweetalert/swal.js')}}"></script>
    <script src="{{ url('adminasset/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ url('adminasset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ url('adminasset/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ url('adminasset/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ url('adminasset/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ url('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ url('adminasset/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ url('adminasset/vendor/select2/select2.min.js')}}">

    </script>
 
    <!-- Main JS-->
    <script src="{{ url('adminasset/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
