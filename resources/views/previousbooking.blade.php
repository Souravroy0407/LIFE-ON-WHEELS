<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life On Wheels - Services</title>
    <link rel="stylesheet" href="{{url('Frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('Frontend/css/style2.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('Frontend/css/slider.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('Frontend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('Frontend/css/style5.css')}}" type="text/css" media="all">

    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    

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
                                @include("inc/menu3")

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

    <!-- Your existing content goes here -->
<br>
    <!-- Form Container -->
    <div class="form-container" id="myModal">
    <h2><b>Previous Bookings :</b></h2>
        <form class="formm" method="GET" action="{{ url('showpre_booking') }}">
            @csrf
            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="phone"><b>Phone Number:</b></label>
            <input type="tel" id="phone" name="phone" required><br><br>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
<br><br>
    <!-- Include your JavaScript code here to show/hide the modal -->

    <!-- ... (your existing code) ... -->

    <!-- Footer -->
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
        <!-- ... (your existing code) ... -->
    </div>

    <!-- Include your JavaScript files here -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{url('Frontend/js/index.js')}}"></script>

    <!-- Include your custom JavaScript code for the modal here -->

</body>
</html>
