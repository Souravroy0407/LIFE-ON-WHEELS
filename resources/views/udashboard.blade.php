
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Life On Wheels - HOME</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Medizin Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
        <div class="main-w3layouts-header-sec">

            <!-- header -->
            <header>
                <div class="container">
                    <div class="header d-lg-flex justify-content-between align-items-center">
                        <div class="header-section">
                            <h1>
                                <a class="navbar-brand logo editContent" href="{{url('/')}}">
                                
                                <span class="fa fa-heartbeat"></span>Life On Wheels
                                </a>
                            </h1>
                        </div>
                        @include("inc/menu2")
                    </div>
                </div>
            </header>
            <!-- //header -->
            <!-- banner -->
            <section class="banner_w3pvt" id="home">
                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slides" checked="checked" id="slides_1" />
                    <input type="radio" name="slides" id="slides_2" />
                    <input type="radio" name="slides" id="slides_3" />
                    <input type="radio" name="slides" id="slides_4" />
                    <ul>
                        <li>
                            <div class="banner-top">
                                <div class="overlay">
                                    <div class="container">
                                        <div class="banner-info">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                   
                </div>
            </section>
            <!-- //banner -->
        <!-- //header -->
        <!--/banner-bottom -->
        <section class="banner-bottom py-5">
            <div class="container-fluid inner-sec-w3ls">
                <div class="feature-grids row text-center">
                    <div class="col-lg-3 gd-bottom one">
                        <div class="bottom-gd">
                            <span class="fa fa-ambulance" aria-hidden="true"></span>
                            <h3 class="mb-2">Premium Ambulance Services</h3>
                            <p>With Premium Ambulance Service, you're covered for UNLIMITED Emergency ambulance trips and on-the-go treatment with us.We do Extreem Level of care to the patients.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 gd-bottom">
                        <div class="bottom-gd">
                            <span class="fa fa-ambulance" aria-hidden="true"></span>
                            <h3 class="mb-2">
                            Non-Premium Ambulance Services</h3>
                            <p>An Ambulance that provides medical help to patients in an emergency situation.The level of care provided is dependent upon the patient's need.</p>

                        </div>
                    </div>
                    <div class="col-lg-3 gd-bottom">
                        <div class="bottom-gd">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                            <h3 class="mb-2">GPS Tracking</h3>
                            <p>With this service you get GPS tracking and enable you to see the live location of your journey.and you're updated about your booked ambulance.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 gd-bottom">
                        <div class="bottom-gd">
                            <span class="fa fa-medkit" aria-hidden="true"></span>
                            <h3 class="mb-2">Care & Safety</h3>
                            <p>We Try our best to save your life.We belive in every life matters the most.Dont fare when we are here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj4VXG9J23GDZ1snRdf-NLO8nxZz8Gi58"></script>
                <div id="map" style="width: 100%; height: 400px;"></div>
                <div id="map"></div>

                <script>
                    var map;

                    function initMap() {
                        // Coordinates for Kolkata (Calcutta), India
                        var kolkata = { lat: 22.5726, lng: 88.3639 };

                        map = new google.maps.Map(document.getElementById('map'), {
                            center: kolkata,
                            zoom: 12 // You can adjust the zoom level as needed
                        });

                        // Add a marker at Kolkata
                        var marker = new google.maps.Marker({
                            position: kolkata,
                            map: map,
                            title: 'Kolkata (Calcutta)'
                        });
                    }

                    google.maps.event.addDomListener(window, 'load', initMap);
                </script>


        <!-- //banner-bottom -->
        <!-- /last-content -->

        <!-- //last-content -->

        <!-- /tabs -->
        <section class="tabs-blue py-5">
            <div class="container pt-md-5">
                <div class="header-w3layouts text-center mb-5">
                    <h3 class="title-w3pvt mb-3">Our Services</h3>

                </div>
                <div class="tab-main mx-auto">

                    <input id="tab1" type="radio" name="tabs" class="w3layouts-sm" checked>
                    <!-- <label for="tab1">Cardiology</label> -->
                    <!-- <input id="tab2" type="radio" class="w3layouts-sm" name="tabs">
                    <label for="tab2">Surgery</label>

                    <input id="tab3" type="radio" class="w3layouts-sm" name="tabs">
                    <label for="tab3">Laboratory</label>
                    <input id="tab4" type="radio" class="w3layouts-sm" name="tabs">
                    <label for="tab4">Therapist</label> -->
                    <section id="content1" class="inner-w3layouts-wrap">

                        <div class="row part-grids text-center inner-sec-w3ls">

                            <div class="col-md-6 partgrid2">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="img-fluid" src="{{url('Frontend/images/g1.jpg')}}" alt="">
                                    </div>
                                    <div class="caption card-body p-md-4">
                                        <h4 class="mb-4 editContent">Premium Ambulance Services </h4>
                                        <p>
                                        These are our premium ambulances with premium features, click the button to book.</p>
                                        <a href="{{url('/premium_service')}}">
                                        <button type="button" href="{{url('/premium_service')}}" class="btn btn-link">Click Here>></button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 partgrid1">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="img-fluid" src="{{url('Frontend/images/g2.jpg')}}" alt="">
                                    </div>
                                    <div class="caption card-body p-md-4">
                                        <h4 class="mb-4 editContent">Non-Premium Ambulance Services</h4>
                                        <p>
                                        These are our Non-Premium ambulances with basic features, click the button to book.</p>
                                        <a href="{{url('/nonpremium_service')}}">
                                        <button type="button" href="{{url('/premium_service')}}" class="btn btn-link">Click Here>></button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    

                </div>

            </div>
        </section>
        <!-- //tabs -->
       
        <!-- /grids-content1 -->
        <section class="testimonials py-5" id="test">
            <div class="container py-lg-3">
                <div class="header-w3layouts text-center mb-5">
                    <h3 class="title-w3pvt two mb-3"> Our Goals </h3>

                </div>
                <div class="test-content">
                    <div class="testimonials_grid">

                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                        <p class="sub-test editContent">We aim to provide the best possible total patient care experience to our community. We utilize the latest and best equipment available in the industry.We focus on recruitment and retention of the best and brightest staff. We do this by making Life On Wheels Ambulance a positive, comfortable, and professional environment where people want to contribute their time. 
                        </p>
                        <!-- <div class="testi_grid">
                            <img src="{{url('Frontend/images/c1.jpg')}}" alt=" " class="img-fluid">
                            <h5>Thomas Carl</h5>
                            <label>Description </label>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        
 

     



        <!-- //footer -->
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
</body>

</html>
