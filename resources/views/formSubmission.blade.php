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
        <link rel="stylesheet" href="{{url('Frontend/css/style2.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{url('Frontend/css/slider.css')}}" type="text/css" media="all" />
        
        <!-- Style-CSS -->
        <!-- font-awesome-icons -->
        <link href="{{url('Frontend/css/font-awesome.css')}}" rel="stylesheet">

        <!-- //font-awesome-icons -->
        <!-- /Fonts -->
        <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
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
                                @include("inc/menu")

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
            
                <div class="card center-card" style="width:400px">
                    <div class="form-container">
                        <img class="card-img-top" src="{{url('/Service_image')}}/{{$s->service_image}}" alt="Card image">
                        <h4 class="card-title"><b>{{$s->service_name}}</b></h4>
                        <div class="card-body"> 
                                    <!-- Form start from here -->
                                    <form id="bookingForm" onsubmit="return validateForm()" method="post">
                                    
                                        @csrf
                                        <input type="hidden" name="ev" value="{{$s->service_name}}">
                                        <input type="hidden" name="sid" value="{{$s->service_id}}">
                                        <h6><b>Name:</b></h6>
                                        <input type="text" name="name" id="name" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g, '')" placeholder="Enter Your Full Name" required class="form-control">
                                        <br>

                                        <h6><b>Phone Number:</b></h6>
                                        <input type="text" id="pnumber" name="pnumber" placeholder="Enter A Valid 10 Digit Mobile No" oninput="this.value=this.value.replace(/[^0-9]/g,''); validatePhoneNumber(this)" required>
                                        <p id="validationResult"></p>


                                        <h6><b>Email:</b></h6>
                                        <input type="email" id="ema" name="email" placeholder="Email" oninput="validateEmail(this)" class="form-control" required>
                                        <p id="validationResult2"></p>

                                            <!-- choose a hospital destination -->
                                        <?php if($s->ambulance_category=="PREMIUM"){?>
                                        <?php if($s->service_id!=6){ ?>
                                        <h6><b>Address:</b></h6>
                                        <textarea name="address" id="origin" placeholder="Enter Your Full-Address" oninput="initMap()" required class="form-control"></textarea>
                                        <br>
                                        <h6><b>Choose a hospital</b></h6>
                                        <select name="dhospital" id="destination" oninput="initMap()" class="form-control" required>
                                            <option value="">--Select a hospital--</option>
                                            <option value="Fortis Hospital - Anandapur">Fortis Hospital - Anandapur</option>
                                            <option value="Amri Hospital - Dhakuria">Amri Hospital - Dhakuria</option>
                                            <option value="Iris Hospital - Ganguly Bagan">Iris Hospital - Ganguly Bagan</option>
                                            <option value="Apollo Gleneagles Hospital - Salt Lake">Apollo Gleneagles Hospital - Salt Lake</option>
                                            <option value="Rabindranath Tagore International Institute Of Cardiac Sciences - Mukundapur">Rabindranath Tagore International Institute Of Cardiac Sciences - Mukundapur</option>
                                            <option value="The Calcutta Medical Research Institute - Alipore">The Calcutta Medical Research Institute - Alipore</option>
                                            <option value="Peerless Hospital - Panchasayar">Peerless Hospital - Panchasayar</option>
                                            <option value="Woodlands - Alipore">Woodlands - Alipore</option>
                                            <option value="B P Poddar Hospital & Medical Research - Alipore">B P Poddar Hospital & Medical Research - Alipore</option>
                                            <option value="Genesis Hospital - Kasba">Genesis Hospital - Kasba</option>
                                            <option value="Ils Hospitals - DumDum">Ils Hospitals - DumDum</option>
                                            <option value="Apex General Hospital - Baguiati">Apex General Hospital - Baguiati</option>
                                            <option value="Narayana Multispeciality Hospital - Barasat">Narayana Multispeciality Hospital - Barasat</option>
                                            <option value="Fortis Hospital And Kidney Institute - Rash Behari Avenue">Fortis Hospital And Kidney Institute - Rash Behari Avenue</option>
                                            <option value="SSKM Medical College and Hospital - Bhowanipore">SSKM Medical College and Hospital - Bhowanipore</option>
                                            <option value="B.R.Singh Hospital - Sealdah">B.R.Singh Hospital - Sealdah</option>
                                            <option value="Nil Ratan Sircar Medical College and Hospital - Sealdah,Raja Bazar">Nil Ratan Sircar Medical College and Hospital - Sealdah,Raja Bazar</option>
                                            <option value="Kolkata Medical College - College Square">Kolkata Medical College - College Square</option>
                                            <option value="M R Bangur Hospital - Tollygunge">M R Bangur Hospital - Tollygunge</option>
                                        </select>
                                        <br>
                                        
                                        <input type="hidden" name="ac" value="A/c">
                                        <?php } else{ ?>
                                        
                                        <h6><b>Address:</b></h6>
                                        <textarea name="address" id="origin" oninput="initMap()" placeholder="Enter Your Full-Address" required class="form-control"></textarea>
                                        <br>

                                        
                                        <h6><b>Destination Address:</b></h6>
                                        <textarea name="dhospital" id="destination" oninput="initMap()" placeholder="Enter Your Destination Full-Address" required class="form-control"></textarea>
                                        <br>
                                        <h6><b>Ambulance Type:</b></h6>
                                        <div class="radio-container">
                                        <label>
                                        <input type="radio" name="ac" value="A/c" required><h5><b>
                                        A/c</b></h5>
                                        </label>
                                        <label>
                                        <input type="radio" name="ac" value="Non-A/c" required><h5><b>
                                        Non-A/c</b></h5>
                                        </label>
                                        </div>


                                        <?php }} else{?>
                                        
                                        <?php if(in_array($s->service_id, [14, 17])){ ?>

                                        <h6><b>Address:</b></h6>
                                        <textarea name="address" id="origin" oninput="initMap()" placeholder="Enter Your Full-Address" required class="form-control"></textarea>
                                        <br>
                                            
                                        <h6><b>Choose a hospital</b></h6>
                                        <select name="dhospital" id="destination" oninput="initMap()" class="form-control" required>
                                            <option value="">--Select a hospital--</option>
                                            <option value="Fortis Hospital - Anandapur">Fortis Hospital - Anandapur</option>
                                            <option value="Amri Hospital - Dhakuria">Amri Hospital - Dhakuria</option>
                                            <option value="Iris Hospital - Ganguly Bagan">Iris Hospital - Ganguly Bagan</option>
                                            <option value="Apollo Gleneagles Hospital - Salt Lake">Apollo Gleneagles Hospital - Salt Lake</option>
                                            <option value="Rabindranath Tagore International Institute Of Cardiac Sciences - Mukundapur">Rabindranath Tagore International Institute Of Cardiac Sciences - Mukundapur</option>
                                            <option value="The Calcutta Medical Research Institute - Alipore">The Calcutta Medical Research Institute - Alipore</option>
                                            <option value="Peerless Hospital - Panchasayar">Peerless Hospital - Panchasayar</option>
                                            <option value="Woodlands - Alipore">Woodlands - Alipore</option>
                                            <option value="B P Poddar Hospital & Medical Research - Alipore">B P Poddar Hospital & Medical Research - Alipore</option>
                                            <option value="Genesis Hospital - Kasba">Genesis Hospital - Kasba</option>
                                            <option value="Ils Hospitals - DumDum">Ils Hospitals - DumDum</option>
                                            <option value="Apex General Hospital - Baguiati">Apex General Hospital - Baguiati</option>
                                            <option value="Narayana Multispeciality Hospital - Barasat">Narayana Multispeciality Hospital - Barasat</option>
                                            <option value="Fortis Hospital And Kidney Institute - Rash Behari Avenue">Fortis Hospital And Kidney Institute - Rash Behari Avenue</option>
                                            <option value="SSKM Medical College and Hospital - Bhowanipore">SSKM Medical College and Hospital - Bhowanipore</option>
                                            <option value="B.R.Singh Hospital - Sealdah">B.R.Singh Hospital - Sealdah</option>
                                            <option value="Nil Ratan Sircar Medical College and Hospital - Sealdah,Raja Bazar">Nil Ratan Sircar Medical College and Hospital - Sealdah,Raja Bazar</option>
                                            <option value="Kolkata Medical College - College Square">Kolkata Medical College - College Square</option>
                                            <option value="M R Bangur Hospital - Tollygunge">M R Bangur Hospital - Tollygunge</option>
                                        </select>
                                        <br>
                                        
                                        <h6><b>Ambulance Type:</b></h6>
                                        <div class="radio-container">
                                        <label>
                                        <input type="radio" name="ac" value="A/c" required><h5><b>
                                        A/c</b></h5>
                                        </label>
                                        <label>
                                        <input type="radio" name="ac" value="Non-A/c" required><h5><b>
                                        Non-A/c</b></h5>
                                        </label>
                                        </div>
                                        <br>
                                        <?php } else{?>
                                            <input type="hidden" name="ac" value="Non-A/c">
                                        <h6><b>Address:</b></h6>
                                        <textarea name="address" id="origin" oninput="initMap()" placeholder="Enter Your Full-Address" required class="form-control"></textarea>
                                        <br>
                                            <h6><b>Choose a hospital</b></h6>
                                        <select name="dhospital" id="destination" oninput="initMap()" class="form-control" required>
                                            <option value="">--Select a hospital--</option>
                                            <option value="Fortis Hospital - Anandapur">Fortis Hospital - Anandapur</option>
                                            <option value="Amri Hospital - Dhakuria">Amri Hospital - Dhakuria</option>
                                            <option value="Iris Hospital - Ganguly Bagan">Iris Hospital - Ganguly Bagan</option>
                                            <option value="Apollo Gleneagles Hospital - Salt Lake">Apollo Gleneagles Hospital - Salt Lake</option>
                                            <option value="Rabindranath Tagore International Institute Of Cardiac Sciences - Mukundapur">Rabindranath Tagore International Institute Of Cardiac Sciences - Mukundapur</option>
                                            <option value="The Calcutta Medical Research Institute - Alipore">The Calcutta Medical Research Institute - Alipore</option>
                                            <option value="Peerless Hospital - Panchasayar">Peerless Hospital - Panchasayar</option>
                                            <option value="Woodlands - Alipore">Woodlands - Alipore</option>
                                            <option value="B P Poddar Hospital & Medical Research - Alipore">B P Poddar Hospital & Medical Research - Alipore</option>
                                            <option value="Genesis Hospital - Kasba">Genesis Hospital - Kasba</option>
                                            <option value="Ils Hospitals - DumDum">Ils Hospitals - DumDum</option>
                                            <option value="Apex General Hospital - Baguiati">Apex General Hospital - Baguiati</option>
                                            <option value="Narayana Multispeciality Hospital - Barasat">Narayana Multispeciality Hospital - Barasat</option>
                                            <option value="Fortis Hospital And Kidney Institute - Rash Behari Avenue">Fortis Hospital And Kidney Institute - Rash Behari Avenue</option>
                                            <option value="SSKM Medical College and Hospital - Bhowanipore">SSKM Medical College and Hospital - Bhowanipore</option>
                                            <option value="B.R.Singh Hospital - Sealdah">B.R.Singh Hospital - Sealdah</option>
                                            <option value="Nil Ratan Sircar Medical College and Hospital - Sealdah,Raja Bazar">Nil Ratan Sircar Medical College and Hospital - Sealdah,Raja Bazar</option>
                                            <option value="Kolkata Medical College - College Square">Kolkata Medical College - College Square</option>
                                            <option value="M R Bangur Hospital - Tollygunge">M R Bangur Hospital - Tollygunge</option>
                                        </select>
                                        <br>
                                        
                                        <?php }}?>


                                        <p id="result"></p>


                                        <!-- google map script -->
                                        
                                        <?php
                                        if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                            // Retrieve the distance value from JavaScript and store it in a PHP variable
                                            $phpVariable = $_POST['distance'];
                                            echo "Total Distance : " . $phpVariable;?>
                                            <input  type="hidden" name="distance" value='<?php echo $phpVariable;?>'/>
                                        <?php }

                                        ?>
                                        <br>
                                        <div id="map" style="width: 325px;height: 200px;"></div>
                                        <br>
                                        <!-- terms and conditions -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="acceptTerms">
                                            <label class="form-check-label" for="acceptTerms">
                                                I accept Life On Wheels <a href="#" data-toggle="modal" data-target="#termsModal">Terms and Conditions</a>
                                            </label>
                                        </div>
                                        <br>

                                        <input onclick="calculateDistance2()" class="btn btn-success" type="submit" value="Book Now" id="submitButton" name="save">
                                        

                                        
                                        
                                    </form>


                                    <!-- Terms and Conditions Modal -->
                                    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Add your terms and conditions content here -->
                                                    <div class="terms-box">
                                                        <div class="terms-text">
                                                                <h2> Life On Wheels Ambulance Booking Service - Terms and Conditions :</h2>    
                                                                <br>
                                                                <p>Welcome to Life On Wheels, the online ambulance booking service. 
                                                                Please read these Terms and Conditions carefully before using our platform. By accessing or using our services, you agree to comply with and be bound by these terms. 
                                                                If you do not agree with any part of these terms, please do not use our service.</p>
                                                                <p> <b>Service Description: </b>

                                                                Life On Wheels provides an online platform for users to book ambulance services in two categories: Premium and Non-Premium. Users can make bookings and pay in cash for the services rendered.
                                                                </p>
                                                                </p><b> Premium and Non-Premium Services: </b> Premium Category:
                                                                Users who select the Premium Category will receive priority service and additional benefits, which may include faster response times, advanced medical equipment, and other premium services specified by the Service Provider.
                                                                Pricing for the Premium Category will be higher than the Non-Premium Category. Users will be informed of the pricing before confirming their booking.
                                                                </p><p>
                                                                Non-Premium Category:
                                                                Users who select the Non-Premium Category will receive standard ambulance services without the additional benefits offered in the Premium Category.
                                                                Pricing for the Non-Premium Category will be lower than the Premium Category. Users will be informed of the pricing before confirming their booking.</p>

                                                                <p> <b> Booking and Payment: </b> Users must provide accurate and complete information when booking an ambulance, including the location and any relevant medical information.
                                                                As of now, Life On Wheels accepts payment only in cash. Users must pay the full amount to the ambulance crew upon the completion of the service. Please ensure that you have the exact amount available to facilitate a smooth transaction.
                                                                </p>
                                                                <p><b> Booking Confirmation: </b>Once you make a booking through Life On Wheels, you will receive a confirmation of your request via our platform or a phone call. Please ensure that the booking details are accurate.
                                                                </p>
                                                                <p><b> Cancellation and Refunds: </b>- Cancellation Policy: Users can cancel their booking, but we may apply a cancellation fee depending on the timing and circumstances of the cancellation. The specific cancellation policy will be communicated during the booking process.

                                                                - Refunds: Refunds are not applicable for completed bookings. In the event of a cancellation that qualifies for a refund, we will process it according to our refund policy.
                                                                </p>
                                                                <p><b> Privacy and Data Security: </b>We value your privacy and take data security seriously. Please review our Privacy Policy for information on how we collect, use, and protect your personal information.
                                                                </p>
                                                                <p><b> Limitation of Liability: </b>Life On Wheels shall not be liable for any direct, indirect, incidental, special, or consequential damages resulting from the use or inability to use our services, including but not limited to any damages or injuries caused by the ambulance service.
                                                                </p>
                                                                <p><b>Changes to Terms and Conditions: </b>Life On Wheels reserves the right to modify these Terms and Conditions at any time without prior notice. It is the user's responsibility to review these terms periodically for any changes.
                                                                </p>
                                                                <p><b>Contact Information: </b>If you have any questions or concerns regarding these Terms and Conditions, please contact us at Lifeonwheels023@gmail.com or +91 9889079987.
                                                                </p></div>

                                                                <h4><b> By using Life On Wheels, you acknowledge that you have read, understood, and agreed to these <span>Terms and Conditions</span>.
                                                                    These terms constitute a legally binding agreement between you and Life On Wheels.</b></h4>

                                                        </div>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="agreeButton" data-dismiss="modal">Agree</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    

                        </div>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{url('Frontend/js/index.js')}}"></script>
    </body>
</html>
