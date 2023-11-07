
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Life On Wheels - Services</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj4VXG9J23GDZ1snRdf-NLO8nxZz8Gi58 &libraries=places"></script>
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{url('Frontend/css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{url('Frontend/css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('Frontend/css/style1.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{url('Frontend/css/slider.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{url('Frontend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
        <!-- mian-content -->
        <div class="main-w3layouts-header-sec inner" id="home">
            <div class="overlay inner">
                <!-- header -->
                <header>
                    <div class="container">
                        <div class="header d-lg-flex justify-content-between align-items-center">
                            <div class="header-section">
                                <h1>
                                    <a class="navbar-brand logo editContent" href="{{url('/')}}">
                                        <span class="fa fa-heartbeat"></span> Life On Wheels
                                    </a>
                                </h1>
                            </div>
                            @include("inc/menu1")

                        </div>
                    </div>
                </header>
                <!-- //header -->
            </div>
        </div>
        <!-- //header -->

        <!-- /breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">About Us</li>
        </ol>
        <!-- //breadcrumb -->
        <div class="container">
        <h1>Our Non-Premium Services :</h1>
            <div class="row">
            
            
                @foreach($srv as $s)
               
               <?php if($s->ambulance_category=="NON PREMIUM"){
                ?>
                <div class="col-md-4">
                <div class="card" >
                <img class="card-img-top" style="height: 330px;width: 348.5px;" src="{{url('/Service_image')}}/{{$s->service_image}}" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">{{$s->service_name}}</h4>
                    <p class="card-text">Rs.{{$s->service_charge}}/Km</p>

                    <div class="row">
                        <div class="col-md-6">
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$s->service_id}}">Details</a>
                </div>

                <div class="col-md-6">
                <a href="{{url('/carbooking')}}/{{$s->service_id}}"  class="btn btn-success" >Book Now</a>
                </div>
                </div>
                    
                </div>
                </div>
                </div>

               
                <!-- The Modal -->
  <div class="modal" id="myModal{{$s->service_id}}">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <p>{!!$s->service_details!!}</p>
        </div>
  
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

                
        <?php } ?>
        @endforeach
               </div>
               </div>
        <!-- //grids-content1 -->
        <!-- footer -->
        <footer>
            <div class="container">
                <div class="row footer-top">
                    
                       
                            <div class="col-md-4 footer-grid_section_w3layouts">
                                <h3 class="footer-title mb-lg-4 mb-3">Information</h3>
                                <ul class="list-unstyled w3layouts-icons">
                                    <li>
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="{{url('/about_us')}}">About Us</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="{{url('/premium_service')}}">Services</a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="{{url('/contact_us')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 footer-grid_section_w3layouts">
                                <!-- social icons -->
                                <div class="agileinfo_social_icons">
                                    <h3 class="footer-title mb-lg-4 mb-3">Customer Service</h3>
                                    <ul class="list-unstyled w3layouts-icons">

                                        <li>
                                            <a href="{{url('/about_us')}}">About Us</a>
                                        </li>
                                        <li class="mt-3">
                                            <a href="{{url('/contact_us')}}">Contact Us</a>
                                        </li>
                                        <li class="mt-3">
                                            <a href="{{url('/terms_and_conditions')}}">Terms & Condition</a>
                                        </li>
                                        <li class="mt-3">
                                            <a href="{{url('/privacy_policy')}}">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- social icons -->
                            </div>
                            <div class="col-md-4 footer-grid_section_w3layouts my-md-0 my-5">
                                <h3 class="footer-title mb-lg-4 mb-3">Contact Info</h3>
                                <div class="contact-info">
                                    <div class="footer-address-inf">
                                        <h4 class="ad-info mb-2">Phone</h4>
                                        <p>+91 9889079987</p>
                                    </div>
                                    <div class="footer-address-inf my-4">
                                        <h4 class="ad-info mb-2">Email </h4>
                                        <p><a href="mailto:lifeonwheels023@gmail.com">lifeonwheels023@gmail.com</a></p>
                                    </div>
                                    <div class="footer-address-inf">
                                        <h4 class="ad-info mb-2">Location</h4>
                                        <p>Kolkata,West Bengal,India</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer -->
        <div class="cpy-right py-3">
            <div class="container">
                <div class="row">
                    <p class="col-md-10 text-left">© 2023 Life On Wheels. All rights reserved 
                    </p>
                    <!-- move top icon -->
                    <a href="#home" class="move-top text-lg-right text-center col-md-2"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
                    <!-- //move top icon -->
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
