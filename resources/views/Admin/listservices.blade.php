<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Life On Wheels - Admin/List of services</title>

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
                    <h1 class="h3 mb-4 text-gray-800">List Of Services</h1>
                    <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Ambulance Category</th>
                        <th>Charges</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>

                        

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($srv as $s)
                    <tr>
                        <td>{{$s->service_name}}</td>
                        <td>{{$s->ambulance_category}}</td>
                        <td>{{$s->service_charge}}</td>
                        <td>{!!$s->service_details!!}</td>
                        <td><img style="width:220px" src="Service_image/{{$s->service_image}}"></td>
                        <td><a href="{{url('/edit')}}/{{$s->service_id}}" class="btn btn-warning">Edit</a></td>
                        <td><button class="confirm-delete-button" onclick="showConfirmationModal('{{ url('/delete_service/' . $s->service_id) }}')">Delete</button></td>

<!-- Hidden confirmation modal -->
                    </tr>
                        @endforeach
                    </tbody>
                </table>
<div id="confirmationModal" class="modal">
    <style>/* Custom delete button style */
        .confirm-delete-button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .confirm-delete-button:hover {
            background-color: #c82333;
        }
    </style>
            <script>
            function showConfirmationModal(deleteUrl) {
                // Set the delete URL in the modal's Confirm Delete button
                var confirmDeleteButton = document.querySelector('#confirmationModal .modal-content .btn-danger');
                confirmDeleteButton.setAttribute('data-delete-url', deleteUrl);

                // Show the confirmation modal
                var modal = document.getElementById('confirmationModal');
                modal.style.display = 'block';
            }

            function closeConfirmationModal() {
                // Hide the confirmation modal
                var modal = document.getElementById('confirmationModal');
                modal.style.display = 'none';
            }

            function confirmDelete() {
                // Get the delete URL from the Confirm Delete button
                var confirmDeleteButton = document.querySelector('#confirmationModal .modal-content .btn-danger');
                var deleteUrl = confirmDeleteButton.getAttribute('data-delete-url');

                // Perform the delete action by navigating to the delete URL
                window.location.href = deleteUrl;

                // Close the confirmation modal (optional)
                closeConfirmationModal();
            }
            </script>
    <div class="modal-content">
        <button class="btn btn-danger" onclick="confirmDelete()">Confirm Delete</button>
        <button class="btn btn-secondary" onclick="closeConfirmationModal()">Cancel</button>
    </div>
</div>
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