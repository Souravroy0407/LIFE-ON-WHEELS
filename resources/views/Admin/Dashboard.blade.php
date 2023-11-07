<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Life On Wheels - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('mains/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" 
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
  <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('mains/css/sb-admin-2.min.css')}}" rel="stylesheet">
            <style>
        /* FOR MATERIAL ICON   */
        .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 500,
        'GRAD' 0,
        'opsz' 24
        }
        /* FOR CARDS */
        .card{
            border-radius: 4px;
            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        /* padding: 14px 80px 18px 36px; */
        cursor: pointer;
        }

        /* FOR CARD LINK  */
        .card-link {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        }
        </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Admin/inc/sidebar');
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Admin/inc/topbar');
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                                <div class="container">
                                <div class="row">
                                

                                <div class="col-3 ">
                                <div class="card text-white bg-primary mb-3" style="max-width: 15rem;">
                            <div class="card-header"></div>
                            <a href="#" class='card-link'></a>

                            <div class="card-body">
                            <span class="material-symbols-outlined">
                            heart_plus
                            </span>
                                <span><h5 class="card-title">Manage Services</h5></span>

                                </div>
                                </div>
                                </div>

                                <div class="col-3 ">
                                <div class="card text-white bg-primary mb-3" style="max-width: 15rem;">
                                <div class="card-header"></div>
                                <a href="{{url('/list-service')}}" class='card-link'></a>

                            <div class="card-body">
                            <span class="material-symbols-outlined">
                            view_list
                            </span>
                                <span><h5 class="card-title">List Services</h5></span>
                            </div>
                                </div>
                                </div>

                                <div class="col-3 ">
                                <div class="card text-white bg-primary mb-3" style="max-width: 15rem;">
                                <div class="card-header"></div>
                                <a href="{{url('/booking_list')}}" class='card-link'></a>

                            <div class="card-body">
                            
                            <span class="material-symbols-outlined">
                            ambulance
                            </span>
                                <span><h5 class="card-title">Booking Details</h5></span>
                            
                                </div>
                                </div>
                                </div>


                                <div class="col-3 ">
                                <div class="card text-white bg-primary mb-3" style="width: 17rem;">
                                <div class="card-header"></div>
                                <a href="#" class='card-link'></a>

                            <div class="card-body">
                            <span class="material-symbols-outlined">
                            medical_information
                            </span>
                                <span><h5 class="card-title">Ambulance Availablity</h5></span>
                                
                                
                            </div>
                            </div>
                            </div>
                            </div>



                            <!-- <div class="row"> -->
                            <div class="row">
                            <div class="col-xl-8 col-lg-6 ">
                            <div class="card shadow mb-4">
                            <div class="card text-white bg-info mb-0" style="width: 19rem , hight=100rem,padding: 100px 100px 100px 200px;">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                            <span class="material-symbols-outlined">
                            diversity_1
                            </span>
                            <span><h5 class="card-title">Current booking details</h5></span>


                            <!-- table     -->
                            <!-- On rows -->
                            <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col">Booking Id</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Ambulance Type</th>

                                </tr>
                            </thead>
                            <tbody>   
                            @foreach($cbok as $s)
                            <tr>
                                <td>{{$s->booking_id}}</td>
                                <td>{{$s->customer_Name}}</td>
                                <td>{{$s->phone_no}}</td>
                                <td>{{$s->address}}</td>
                                <td>{{$s->ambulance_type}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            </table>

                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="col-xl-4 col-lg-7 ">
                            <div class="card shadow mb-4">
                            <div class="card text-white bg-info mb-0" style="width: 25rem , hight=100rem,padding: 100px 100px 100px 260px;">
                            <div class="card-header"></div>
                            <div class="card-body">
                            
                            <span class="material-symbols-outlined">
                            ambulance
                            </span>
                                <span><h5 class="card-title">On Duty Ambulance Details</h5></span>

                                <!-- table -->
                            <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col">Amb_id</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Amb_type</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <!-- <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td> -->
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <!-- <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td> -->
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <!-- <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td> -->
                                </tr>
                            </tbody>
                            </table>
                            
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('Admin/inc/footer');
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{url('mains/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('mains/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('mains/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('mains/js/sb-admin-2.min.js')}}"></script>

</body>

</html>