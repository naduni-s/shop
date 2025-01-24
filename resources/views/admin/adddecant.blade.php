<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scentsation Store - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Scentsation Store</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Features
                    </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Products</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Products Catogeries</h6>
                        <a class="collapse-item" href="{{ route('menproduct') }}">Men</a>
                        <a class="collapse-item" href="{{ route('womenproduct') }}">Women</a>
                        <a class="collapse-item" href="{{ route('unisexproduct') }}">Unisex</a>
                       
                    </div>
                </div>
            </li>

          <!-- Nav Item - decant Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{route('adddecant')}}" aria-expanded="true" aria-controls="">
        <i class="fas fa-flask"></i>
        <span>Add Decants</span>
    </a>
</li>


           <!-- Nav Item - orders Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>Orders</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Order Catogeries</h6>
            <a class="collapse-item" href="{{ route('test-submit') }}">Subscription Plan</a>
            <a class="collapse-item" href="{{ route('admin.refilling') }}">Refiliing Oders</a>
            <a class="collapse-item" href="{{ route('admin.refillpayment') }}">Refilling Payment</a>      
          </div>
    </div>
</li>


             <!-- Nav Item - review Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('admin.review')}}" aria-expanded="true" aria-controls="">
                    <i class="fas fa-star"></i>
                    <span>Reviews</span>
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

                 <!-- Page Heading -->
                 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Decants</h1>
                </div>

                
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Display success message -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


                <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addDecantModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add New Decant</span>
                </a>


                <br><br><br>

                <!-- Decant List -->
                <div class="row">
                    @foreach($decants as $decant)
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $decant->name }}</h5>
                                    <p class="card-text text-success">Size: {{ $decant->size }}ml</p>
                                    <p class="card-text text-success">Price: LKR {{ $decant->price }}</p>
                
                                    <div class="d-flex justify-content-center">
                                        <!-- Inline Edit Form -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editDecantModal{{ $decant->id }}">
                                            Edit
                                        </button>
                                        &nbsp;&nbsp;
                                        <!-- Delete Button -->
                                        <form action="{{ route('destroydecant', $decant->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- Edit Decant Form -->

                <div class="modal fade" id="editDecantModal{{ $decant->id }}" tabindex="-1" role="dialog" aria-labelledby="editDecantModalLabel{{ $decant->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editDecantModalLabel{{ $decant->id }}">Edit Decant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('updatedecant', $decant->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="editDecantName">Decant Name</label>
                                        <input type="text" class="form-control" id="editDecantName" name="name" value="{{ $decant->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editDecantSize">Decant Size</label>
                                        <input type="text" class="form-control" id="editDecantSize" name="size" value="{{ $decant->size }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editDecantPrice">Decant Price</label>
                                        <input type="text" class="form-control" id="editDecantPrice" name="price" value="{{ $decant->price }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Update Decant</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                    @endforeach
                </div>
                
                <!-- Add Decant Form -->
                <div class="modal fade" id="addDecantModal" tabindex="-1" role="dialog" aria-labelledby="addDecantModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addDecantModalLabel">Add New Decant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('storedecant') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="decantName">Decant Name</label>
                                        <input type="text" class="form-control" id="decantName" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="decantSize">Decant Size</label>
                                        <input type="text" class="form-control" id="decantSize" name="size" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="decantPrice">Decant Price</label>
                                        <input type="text" class="form-control" id="decantPrice" name="price" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Add Decant</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

               















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
