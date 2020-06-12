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
    <title>Admin::order food</title>

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
                                    <a href="button.html">Add staff</a>
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
                                    <a href="login.html">Add dish</a>
                                </li>
                                <li>
                                    <a href="register.html">Manage dish</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Roon</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Add room</a>
                                </li>
                                <li>
                                    <a href="badge.html">Manage room</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Manage all orders</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Make order</a>
                                </li>
                                <li>
                                    <a href="badge.html">Process order</a>
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
                                    <a href="{{ url('/create')}}">Add staff</a>
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
                                    <a href="button.html">Add new dish</a>
                                </li>
                                <li>
                                    <a href="badge.html">Manage dish</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="has-sub ">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-home"></i>Rooms</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('/create')}}">Add room</a>
                                </li>
                                <li>
                                    <a href="{{ url('/managestaffs')}}">Manage rooms</a>
                                </li>
                              
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tasks"></i>Manage all orders</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Make order</a>
                                </li>
                                <li>
                                    <a href="badge.html">Process order</a>
                                </li>
                              
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header"  method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input class="au-input au-input--xl" type="text" name="type" value="Search for food or beverages only" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                               
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 orders</p>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{url('adminasset/images/icon')}}/{{ Auth::user()->image }} " alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{url('adminasset/images/icon')}}/{{ Auth::user()->image }} " alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                            <form method="POST" action="{{route('logout')}}">
                                            @csrf
                                               
                                                    <i class="zmdi zmdi-power"></i><button type="submit">Logout</button></a>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
             <!-- MAIN CONTENT-->
             <div class="main-content">
             @if ($message = session('info'))
    <div class="card-body">
    <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
											<span class="badge badge-pill badge-warning">Success</span>
											{{ $message}}.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                                        </div>
                                        @endif 
                                        @if ($message = session('danger'))
                                        <div class="card-body">
										<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Success</span>
											{{ $message}}.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                                       </div>
                                        @endif 
                <div class="section__content section__content--p30">
                
                    <div class="container-fluid">
                    <div class="card-body">
										
                    <?php $clientid=Auth::user()-> id; ?>
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" id="home-tab" data-toggle="tab" href="{{ url('/menu')}}" role="tab" aria-controls="home" aria-selected="true">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active" id="profile-tab" data-toggle="tab" href="{{ url('/breakfast')}}" role="tab" aria-controls="profile" aria-selected="false">Break fast</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active" id="contact-tab" data-toggle="tab" href="{{ url('/lunch')}}" role="tab" aria-controls="contact" aria-selected="false">Lunch meals</a>
											</li>
                                            <li class="nav-item">
												<a class="nav-link active" id="contact-tab" data-toggle="tab" href="{{ url('/supper')}}" role="tab" aria-controls="contact" aria-selected="false">Supper meals</a>
											</li>
                                            <li class="nav-item">
												<a class="nav-link active" id="contact-tab" data-toggle="tab" href="{{ url('/softdrink')}}" role="tab" aria-controls="contact" aria-selected="false">Softs drinks</a>
											</li>
                                            <li class="nav-item">
												<a class="nav-link active" id="contact-tab" data-toggle="tab" href="{{ url('/skip',$clientid) }}" role="tab" aria-controls="contact" aria-selected="false">Skip to payments</a>
											</li>
										</ul>
										<div class="tab-content pl-3 p-1" id="myTabContent">
											<div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
												<h3>Home</h3>
												<p>Here is the whole menu.</p>
											</div>
											
										</div>

                    <div class="row"> 
                       @foreach ($food as $food)
                       <?php $clientid=Auth::user()-> id; ?>
                                 <div class="col-md-4">
                                <div class="card">
                                    <img class="foodimg" src="{{ url('foodimages')}}/{{$food->image}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">{{ $food->foodname }}</h4>
                                        <p class="card-text"><u>Ingredients:</u><br>{{ $food->ingredients }}
                                        </p>
                                         <button type="button" class="btn btn-warning" >
                                                        <a href="/controlfoodorder/{{$food->foodid}}/{{$clientid}}">
                                                        <i class="fa fa-check-square"></i>order    
                                                        </button>
                                                      
                                                      
                                          
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                        
                            </div>       
                           
                     
          
                           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © <?php echo date('Y')?> E-hotel. All rights reserved. System by <a href="https://kilonzowambua.github.io">Kilodev</a>.</p>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
    @if(Session::has('success'))
<script type="text/javascript">
swal({
    title:'Success!',
    text:"{{Session::get('success')}}",
    timer:5000,
    type:'success'
}).then(value) =>{

}).catch(swal.noop);
</script>
@endif
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
