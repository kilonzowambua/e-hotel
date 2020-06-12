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
    <title>Update dish</title>

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
                <div class="login-wrap">
                <div class="login-logo">
                            <a href="#">
                                <img src="{{url('adminasset/images/icon/logo.png') }}" alt="CoolAdmin">
                            </a>
                        </div>
            
   
           
                                   
                                        <form action="/editsingledish/<?php echo $food[0]->foodid; ?>" enctype="multipart/form-data" method = "post" >
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                            <div class="form-group">
                                                <label for="nf-text" class=" form-control-label">Dish name</label>
                                                <input type="text" id="nf-text" name="foodname" value="<?php echo $food[0]->foodname; ?>" class="form-control">
                                               
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                <img class="foodimg" src="{{ url('foodimages')}}/<?php echo $food[0]->image; ?>" alt="<?php echo $food[0]->image; ?>">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="image" class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Ingredients</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="ingredients" id="textarea-input" rows="9" value="<?php echo $food[0]->ingredients; ?>" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            
                                           
                                            <div class="form-group">
                                                <label for="nf-text" class=" form-control-label">Price</label>
                                                <input type="text" id="nf-text" name="foodprice" placeholder="<?php echo $food[0]->foodprice; ?>" class="form-control">
                                                
                                            </div>
                                            <div class="form-group">
                                               
                                                    <label for="select" class=" form-control-label">Category</label>
                                                
                                                <div class="col-12 col-md-9">
                                                    <select name="type" id="select" class="form-control">
                                                        <option value="<?php echo $food[0]->type; ?>">Please select </option>
                                                        <option value="breakfast">Breakfast</option>
                                                        <option value="lunch">Lunch</option>
                                                        <option value="supper">Supper</option>
                                                        <option value="soft drinks">Soft drink</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                           
                                    
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> update
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
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