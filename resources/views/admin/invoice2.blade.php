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
    <title>Admin:: Complete invoice</title>

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
                                            <h3 class="text-center title-2">Pay Invoice</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                       <h2> Room Details:</h2>
                                       <?php $clientid=Auth::user()-> id; ?>
                                       <div class="col-lg-25">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                <tr> 
                                                <td>Room type</td>
                                                <td>Days</td>
                                                <td>Price</td>
                                                <td>Total cost</td>
                                                <td>Remove</td>
                                                </tr>
                                                <tr> 
                                             
                                                <td><?php echo $data[0]->roomtype; ?></td>
           
           <?php
                                                        $to=strtotime($data[0]->finaldate);
                                                        $from = strtotime($data[0]->dateofrent);
                                                        $duration=abs(round($to-$from)/86400);
                                                        //$duration=$to->diffInDays($from)
                                                        ?>
           <td><?php  if($duration<=1){
                                                    echo"1";
                                                        }else{
                                                            echo"$duration";
                                                        }
                                                        
                                                        ?></td>
                                                           <td><?php echo $data[0]->price; ?></td>
            <td class="text-right"> <?php  if($duration<=1){
                                                            $rentcost=1*($data[0]->price);
                                                    echo"$rentcost";
                                                        }else{
                                                            $rentcost=$duration*($data[0]->price);
                                                            echo"$rentcost";

                                                        }
                                                        
                                                        ?></td>
                                                    <td>  
                                                        <button type="submit"  class="item" data-toggle="tooltip" data-placement="top" title="Remove">
                                                        <a href="/removeroom/{{$data[0]->roomid}}">
                                                        Remove
                                                        </button>
                                                        </td>    
                                                       
           <td></td>
                                                </tr>
                                                <h4>Rent cost:Ksh.{{$rentcost}}</h4>
                                                </tbody>

                                            </table>
                                          
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <form action="" method="post" novalidate="novalidate">
                                       <h2> Food Details:</h2>
                                       <?php $clientid=Auth::user()-> id; ?>
                                       <div class="col-lg-25">
                         <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                <tr> 
                                                <td>food name</td>
                                                <td>Quantity</td>
                                                <td>Price</td>
                                                <td>Total cost</td>
                                                <td>Remove</td>
                                                </tr>
                                                @php
                                                        $foodcost = 0;
                                                        @endphp
                                                @foreach ($data as $food) 
                                                <tr> 
                                             
                                                <td><?php echo $food->foodname; ?></td>
                                                <td><?php echo $food->quantity; ?></td>
                                                    <td><?php echo $food->foodprice; ?></td>
                                                          
            <td class="text-right"> <?php echo $food->totalcost; ?></td>
                                                    <td>  
                                                        <button type="submit"  class="item" data-toggle="tooltip" data-placement="top" title="Remove">
                                                        <a href="/removedish/{{$data[0]->foodid}}/{{$clientid}}">
                                                        Remove
                                                        </button>
                                                        </td>    
                                                        @php
                                                        $foodcost +=$food->totalcost ;
                                                        @endphp   
           <td></td>
                                                </tr>
                                                @endforeach

                                                <h4>Food cost:Ksh.{{$foodcost}}</h4>
                                                </tbody>

                                            </table>
                                       
                                          
                                        </div>
                                    </div>
                                </div>
                                <h2>Total cost:<?php $combainedcost=$foodcost+$rentcost;
                                echo $combainedcost;
                                ?></h2>      
                                </div>                    
                                <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <a href="/pay">
                                                    <i class="fa fa-check fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay sh.{{$combainedcost}}.00</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                                
                                            </div>          
                                            
                                          


  
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