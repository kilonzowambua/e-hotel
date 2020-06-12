<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="kilodev">
    <meta name="author" content="kilodev">
    <meta name="keywords" content="kilodev">

    <!-- Title Page-->
    <title>Admin:: view room</title>

    <link href="{{url('adminasset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('adminasset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

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
              
            <div class="row">
                            <div class="col-md-12 offset-md-1">
                            <div class="login-wrap">
                <div class="login-logo">
                            <a href="#">
                                <img src="{{url('adminasset/images/icon/logo.png') }}" alt="E-hotel">
                            </a>
                        </div>
                                <div class="card">
                                
                                    <div class="card-header">Payment</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Mpesa mode</h3>
                                        </div>
                                        <hr>
                                        <form action="/sent" method="post" novalidate="novalidate">
                                       <h4> Till no:454545</h4>
                                       <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                       <?php $clientid=Auth::user()-> id; ?>
                                       <input id="cc-pament" name="clientid" type="hidden" class="form-control" aria-required="true" aria-invalid="false" value="{{$clientid }}">
                                       <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Transaction code:</label>
                                                <input id="cc-pament" name="transactioncode" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{null}}">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                  
                                                    <span id="payment-button-amount">Confrim</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    
           
</div></div></div></div>



  
    <script src="{{url('adminasset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('adminasset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('adminasset/vendor/slick/slick.min.js')}}">
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