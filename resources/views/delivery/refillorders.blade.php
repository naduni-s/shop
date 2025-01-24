

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Delivery Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('delivery.dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Scentsation Store</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('delivery.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Order Catogeries
                    </div>

          
          <!-- Nav Item - branch Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href=" {{route('normalorder')}}" aria-expanded="true" aria-controls="">
        <i class="fas fa-flask"></i>
        <span>Normal Orders</span>
    </a>
</li>


          <!-- Nav Item - branch Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('refillorders')}}" aria-expanded="true" aria-controls="">
                <i class="fas fa-flask"></i>
                <span>Refill Orders</span>
            </a>
        </li>
        


            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $userName ?? 'Guest' }}</span>
<img class="img-profile rounded-circle"
                                    src="template/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Refill Details Table -->
                    
<div class="overflow-x-auto">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Refill Order Details</h6>
    </div>
    <table class="min-w-full bg-black border border-black rounded-lg shadow-md">
        <thead>
            <tr class="bg-gray-200 text-gray-700 text-sm font-semibold uppercase">
                <th class="py-3 px-4 text-left">User Name</th>
                <th class="py-3 px-4 text-left">Address</th>
                <th class="py-3 px-4 text-left">Phone Number</th>
                <th class="py-3 px-4 text-left">Decant Name</th>
                <th class="py-3 px-4 text-left">Size</th>
                <th class="py-3 px-4 text-left">Price</th>
                <th class="py-3 px-4 text-left">Update Delivery Status</th>
                
            
            </tr>
        </thead>
        <tbody class="text-black text-m">
            @foreach ($requests as $request)
            <tr class="border-b bg-white text-black">
                <td class="py-3 px-4">{{ $request->user->name ?? 'N/A' }}</td>
                <td class="py-3 px-4">{{ $request->address }}</td>
                <td class="py-3 px-4">{{ $request->phone_number }}</td>
                <td class="py-3 px-4">{{ $request->decant->name ?? 'N/A' }}</td>
                <td class="py-3 px-4">{{ $request->size }}</td>
                <td class="py-3 px-4">Rs.{{ $request->price }}</td>
<td class="py-3 px-4">
                <form action="{{ route('updateDeliveryStatus', $request->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <select name="delivery_status" class="form-control">
                        <option value="Pending" {{ $request->delivery_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Processing" {{ $request->delivery_status == 'Processing' ? 'selected' : '' }}>Processing</option>
                        <option value="Shipped" {{ $request->delivery_status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="Delivered" {{ $request->delivery_status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="Cancelled" {{ $request->delivery_status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </form>
</td>
                
                           
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


                </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Scentsation Store Website 2024</span>
                    </div>
                </div>
            </footer>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="block py-2 px-3 w-full text-left rounded-lg transition text-white"
                                style="background-color: #f56565; /* Tailwind's bg-red-500 */">
                            Logout
                        </button>
                      </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="template/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="template/js/demo/chart-area-demo.js"></script>
    <script src="template/js/demo/chart-pie-demo.js"></script>

</body>

</html>
