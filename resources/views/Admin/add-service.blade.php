<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Life On Wheels - Add-Service</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('mains/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{url('mains/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

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
                    <h1 class="h3 mb-4 text-gray-800">Add An Service</h1>
                    <form action="{{url('ins-service')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h4><b>Ambulance Category</b></h4>
                        <select name="category">
                        <option value="">--Select--</option>
                        <option value="PREMIUM">Premium Service</option>
                        <option value="NON PREMIUM">Non Premium Service</option>
                        </select>
                        <br>
                        <h4><b>Service Name</b></h4>
                        <input type="text" name="sname" id="sname">
                        <br>
                        <h4><b>Service Charges/km</b></h4>
                        <input type="number" name="scharge" id="scharge">
                        <br>
                        <h4><b>Service Images</b></h4>
                        <input type="file" name="simage">
                        <br>
                        <h4><b>Service Details</b></h4>
                        <textarea name="sdetail" id="sdetail"></textarea>
                        <br><br>
                        <input class="btn btn-success" type="submit" value="Add Service" name="save">
                    </form>
                    <script>
                        CKEDITOR.replace('sdetail');
                    </script>

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