<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scentsation Store - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
     
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/template/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin')); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Scentsation Store</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('admin')); ?>">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Registation</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Branch Admin</a>
                    </div>
                </div>
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
                        <a class="collapse-item" href="<?php echo e(route('menproduct')); ?>">Men</a>
                        <a class="collapse-item" href="<?php echo e(route('womenproduct')); ?>">Women</a>
                        <a class="collapse-item" href="<?php echo e(route('unisexproduct')); ?>">Unisex</a>
                       
                    </div>
                </div>
            </li>

          <!-- Nav Item - branch Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo e(route('adddecant')); ?>" aria-expanded="true" aria-controls="">
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
            <a class="collapse-item" href="<?php echo e(route('test-submit')); ?>">Subscription Plan</a>
            <a class="collapse-item" href="<?php echo e(route('admin.refilling')); ?>">Refiliing Requests</a>
            <a class="collapse-item" href="<?php echo e(route('admin.refillpayment')); ?>">Refilling Payment</a>
        </div>
    </div>
</li>
             <!-- Nav Item - review Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target=""
                    aria-expanded="true" aria-controls="">
                    <i class="fas fa-fw fa-star"></i>
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
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e($userName ?? 'Guest'); ?></span>
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
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->



<!-- Payment Details Section -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Refill Payment Details</h1>

    <?php if($payments->isEmpty()): ?>
        <p class="text-gray-500">No payments found.</p>
    <?php else: ?>
        <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-gray-700 text-sm font-semibold uppercase">
                    
                    <th class="px-4 py-2 text-left">Customer Name</th>
                    <th class="px-4 py-2 text-left">Product Name</th>
                    
                    <th class="px-4 py-2 text-left">Customer Email</th>
                    <th class="px-4 py-2 text-left">Amount</th>
                    <th class="px-4 py-2 text-left">Currency</th>
                    <th class="px-4 py-2 text-left">Payment Status</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b hover:bg-gray-100">
                    
                    <td class="px-4 py-2"><?php echo e($payment->customer_name); ?></td>
                    <td class="px-4 py-2"><?php echo e($payment->product_name); ?></td>
                   
                    <td class="px-4 py-2"><?php echo e($payment->customer_email); ?></td>
                    <td class="px-4 py-2">Rs.<?php echo e(number_format($payment->amount, 2)); ?></td>
                    <td class="px-4 py-2"><?php echo e(strtoupper($payment->currency)); ?></td>
                    <td class="px-4 py-2"><?php echo e(ucfirst($payment->payment_status)); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>


<br><br>
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
        <a class="btn btn-primary" href="login.html">Logout</a>
    </div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="template/vendor/jquery/jquery.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


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

</html><?php /**PATH C:\xampp\htdocs\test\ccproj\resources\views/admin/refillpayment.blade.php ENDPATH**/ ?>