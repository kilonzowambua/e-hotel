<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kilodev">
    <meta name="author" content="Kilodev">
    <meta name="keywords" content="Kilodev">

    <!-- Title Page-->
    <title>{{ 'Admin::edit client'}}</title>

    <link href="{{url('adminasset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/sweetalert/')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('adminasset/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('adminasset/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
   <link href="{{ url('adminasset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('adminasset/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('adminasset/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="icon" type="image/png" href="{{url('adminasset/images/icon/icon.png')}}" />
</head>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
            <div class="container">
                <div class="login-wrap">
                <div class="login-logo">
                            <a href="#">
                                <img src="{{ url('adminasset/images/icon/logo.png') }}" alt="e-hotel">
                            </a>
                        </div>
            
   
           
                                   
                                        <form action="/editsingleclient/<?php echo $client[0]->clientid; ?>"  method = "post" >
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="form-group">
                                                <label for="nf-text" class=" form-control-label">Client name</label>
                                                <input type="text" id="nf-textl" name="clientname" value="<?php echo $client[0]->clientname; ?>" class="form-control">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-text" class=" form-control-label">National id</label>
                                                <input type="text" id="nf-text" name="nationalid" value="<?php echo $client[0]->nationalid; ?>" class="form-control">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">E-mail</label>
                                                <input type="email" id="nf-email" name="email" value="<?php echo $client[0]->email; ?>" class="form-control">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-text" class=" form-control-label">Home county</label>
                                                <input type="text" id="nf-text" name="county" value="<?php echo $client[0]->county; ?>" class="form-control">
                                                
                                            </div>
                                           
                                          
                                       
                                    
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> update
                                        </button>
                                       
                                    </div>
                                    </form>
</div></div></div></div>



  
    <script src="{{url('adminasset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('adminasset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('adminasset/vendor/slick/slick.min.js')}}">
    </script>
     <script src="{{url('adminasset/vendor/sweetalert/sweetalert.min.js')}}">
    </script>
    <script src="{{url('adminasset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{url('adminasset/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{url('adminasset/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('adminasset/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{ url('adminasset/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->