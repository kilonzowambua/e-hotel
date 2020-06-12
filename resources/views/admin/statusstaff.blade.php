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
    <title>{{ 'Admin::Staff control'}}</title>

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
            <!--  <div class="section__content section__content--p30">
                <!-- <div class="container-fluid">
            <!--<div class="container">-->
            <div id="printclientdetail">
                <div class="login-wrap" id="login-wrap">
                <div class="login-logo">
                            <a href="#">
                                <img src="{{url('adminasset/images/icon/logo.png') }}" alt="e-hotel">
                            </a>
                        </div>
                        
            
   
           
                                   
                                        <form action="/controlstatus/<?php echo $staff[0]->staffid; ?>"  method = "post" >
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="form-group">
                                                <label for="nf-text" class=" form-control-label">Staff name</label>
                                                <input type="text" readonly id="nf-textl" name="staffname" placeholder="<?php echo $staff[0]->staffname;?>" class="form-control">
                                               
                                            </div>
                                            <?php
                                            if( $client[0]->status =='on duty'){
                                                      echo  "     
                                                      <div class='form-group'>
                                                     
                                                      <input type='hidden'  id='nf-textl' name='status' value='off duty' class='form-control'>
                                                     
                                                  </div>
                                                  ";
                                            } 
                                            else{
                                                echo  " <div class='form-group'>
                                            
                                                <input type='hidden'  id='nf-textl' name='status' value='on duty' class='form-control'>
                                               
                                            </div>
                                                ";
                                            }
                                          ?>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">E-mail</label>
                                                <input type="email" id="nf-email"  name="email" placeholder="<?php echo $client[0]->email;?>" class="form-control">
                                               
                                            </div>
                                            <?php
                                                    if( $staff[0]->status =='on duty'){
                                                      echo  " <div class='card-footer'>
                                                      <button type='submit' class='btn btn-danger btn-sm'>
                                                          <i class='fa fa-block'></i> Deactive staff
                                                      </button>
                                                     
                                                  </div>";
                                                    }
                                                    else
                                                    {
                                                        echo  "<div class='card-footer'>
                                                        <button type='submit' class='btn btn-primary btn-sm'>
                                                            <i class='fa fa-unblock'></i> Active staff
                                                        </button>
                                                       
                                                    </div>";
                                                    }
                                                ?>
                                                    

                                      
                                            </div>
                                            </div>
                                           
                                           
                                       
                                    
                                  
                                      
                                    
                                    </form>
</div></div>
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


  
    <script src="{{url('adminasset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('adminasset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('adminasset/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{url('adminasset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('adminasset/vendor/sweetalert/sweetalert.min.js')}}"></script>
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
    <script>
    function printContent(el)
    {
        var restorepage = $('body').html();
        var printcontent = $('#'+el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);

    }
</script>
</body>

</html>
<!-- end document-->