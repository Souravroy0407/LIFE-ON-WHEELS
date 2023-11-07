



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Life On Wheels ADmin</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('mains/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('mains/css/sb-admin-2.min.css')}}" rel="stylesheet">

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
                    <h1 class="h3 mb-4 text-gray-800">Booking Details</h1>
                    <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Service Name</th>
                        <th>Ambulance Type</th>
                        <th>Calculated Distance</th>
                        <th>Payment Method</th>
                        <th>Total Ammount</th>

                    </tr>
                    </thead>
                    <tbody>
                @foreach ($bok as $s)
                    <tr>
                        <td>{{$s->customer_Name}}</td>
                        <td>{{$s->phone_no}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->service_name}}</td>
                        <td>{{$s->ambulance_type}}</td>
                        <td>{{$s->total_distance}} Km</td>
                        <td>{{$s->payment_mode}}</td>
                        <td>{{$s->totalAmount}} Rs.</td>
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
    <a class="btn btn-success" href="{{url('/booking_list_pdf')}}">Export PDF</a>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('Admin/inc/footer');
    <!-- Bootstrap core JavaScript-->
    <script src="{{url('mains/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('mains/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('mains/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('mains/js/sb-admin-2.min.js')}}"></script>

</body>

</html>