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
        aria-expanded="false" aria-controls="collapseThree">
        <i class="fas fa-fw fa-shopping-cart"></i>
        <span>Orders</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Order Categories</h6>
            <a class="collapse-item" href="<?php echo e(route('test-submit')); ?>">Subscription Plan</a>
            <a class="collapse-item" href="<?php echo e(route('admin.refilling')); ?>">Refilling Orders</a>
            <a class="collapse-item" href="<?php echo e(route('admin.refillpayment')); ?>">Refilling Payment</a>
                </div>
    </div>
</li>
            
             <!-- Nav Item - review Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo e(route('admin.review')); ?>" aria-expanded="true" aria-controls="">
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

       
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Refill Decants Requests</h1>
                    
           <!-- Refill Details Table -->
<div class="overflow-x-auto">
    <table class="min-w-full bg-black border border-black rounded-lg shadow-md">
        <thead>
            <tr class="bg-gray-200 text-gray-700 text-sm font-semibold uppercase">
                <th class="py-3 px-4 text-left">User Name</th>
                <th class="py-3 px-4 text-left">Address</th>
                <th class="py-3 px-4 text-left">Phone Number</th>
                <th class="py-3 px-4 text-left">Decant Name</th>
                <th class="py-3 px-4 text-left">Size</th>
                <th class="py-3 px-4 text-left">Price</th>
                <th class="py-3 px-4 text-left">Status</th>
                <th class="py-3 px-4 text-left">Action</th>
            
            </tr>
        </thead>
        <tbody class="text-black text-m">
            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-b bg-white text-black">
                <td class="py-3 px-4"><?php echo e($request->user->name ?? 'N/A'); ?></td>
                <td class="py-3 px-4"><?php echo e($request->address); ?></td>
                <td class="py-3 px-4"><?php echo e($request->phone_number); ?></td>
                <td class="py-3 px-4"><?php echo e($request->decant->name ?? 'N/A'); ?></td>
                <td class="py-3 px-4"><?php echo e($request->size); ?></td>
                <td class="py-3 px-4">Rs.<?php echo e($request->price); ?></td>
                <td class="py-3 px-4">
                    <span class="px-2 py-1 rounded-full text-black text-sm font-semibold
                        <?php echo e($request->status == 'Pending' ? 'bg-yellow-500' : ''); ?>

                        <?php echo e($request->status == 'Approved' ? 'bg-green-500' : ''); ?>

                        <?php echo e($request->status == 'Paid' ? 'bg-blue-500' : ''); ?>">
                        <?php echo e($request->status); ?>

                    </span>
                </td>
                
                <td class="py-3 px-4">
                    <form action="<?php echo e(route('admin.refilling.update', $request)); ?>" method="POST" class="flex items-center space-x-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <select name="status" required class="block w-28 py-2 px-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 text-sm">
                            <option value="Pending" <?php echo e($request->status == 'Pending' ? 'selected' : ''); ?>>Pending</option>
                            <option value="Approved" <?php echo e($request->status == 'Approved' ? 'selected' : ''); ?>>Approved</option>
                            
                            <option value="Paid" <?php echo e($request->status == 'Paid' ? 'selected' : ''); ?>>Paid</option>
                        </select>
                        <button type="submit" class="bg-red text-black px-3 py-2 rounded-lg shadow hover:bg-green-600 transition duration-150 text-sm">
                            Update
                        </button>
                    </form>


                    <!-- Delete Form -->
                    <form action="<?php echo e(route('admin.refilling.destroy', $request->id)); ?>" method="POST" class="inline-flex items-center ml-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="bg-red-500 text-black px-3 py-2 rounded-lg shadow hover:bg-red-600 transition duration-150 text-sm" onclick="return confirm('Are you sure you want to delete this request?');">
                            Delete
                        </button>
                    </form>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
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

</html><?php /**PATH C:\Users\User\Desktop\dewan\ccproj (3)\ccproj\resources\views/admin/refilling.blade.php ENDPATH**/ ?>