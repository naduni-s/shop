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
    <a class="nav-link collapsed" href="<?php echo e(route('addbranch')); ?>" aria-expanded="true" aria-controls="">
        <i class="fas fa-flask"></i>
        <span>Add Branches</span>
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
            <a class="collapse-item" href="<?php echo e(route('admin.refilling')); ?>">Refiliing Oders</a>
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
                                    <img class="img-profile rounded-circle" src="template/img/undraw_profile.svg">
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
  <!-- Begin Page Content -->
  <div class="container-fluid">

                 <!-- Page Heading -->
                 <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Branches</h1>
                </div>

                
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<!-- Display success message -->
<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>


                <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addBranchModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add New Branch</span>
                </a>


                <br><br><br>

                <!-- Branch List -->
                <div class="row">
                    <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php echo e($branch->name); ?></h5>
                                    <p class="card-text text-success">Address: <?php echo e($branch->address); ?></p>
                                    <p class="card-text text-success">Latitude: <?php echo e($branch->latitude); ?></p>
                                    <p class="card-text text-success">Longitude: <?php echo e($branch->longitude); ?></p>
                                    <p class="card-text text-success">Details: <?php echo e($branch->details); ?></p>
                                    <div class="d-flex justify-content-center">
                                        <!-- Inline Edit Form -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editBranchModal<?php echo e($branch->id); ?>">
                                            Edit
                                        </button>
                                        &nbsp;&nbsp;
                                        <!-- Delete Button -->
                                        <form action="<?php echo e(route('destroybranch', $branch->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <!-- Edit Branch Form -->

                <div class="modal fade" id="editBranchModal<?php echo e($branch->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editBranchModalLabel<?php echo e($branch->id); ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editBranchModalLabel<?php echo e($branch->id); ?>">Edit Branch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo e(route('updatebranch', $branch->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="editBranchName">Branch</label>
                                        <input type="text" class="form-control" id="editBranchName" name="name" value="<?php echo e($branch->name); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editAddress">Address</label>
                                        <input type="text" class="form-control" id="editAddress" name="address" value="<?php echo e($branch->address); ?>" required>
                                    </div>
                                    <div class="form-group">
    <label for="editLatitude">Latitude</label>
    <input type="number" class="form-control" id="editLatitude" name="latitude" value="<?php echo e($branch->latitude); ?>" step="any" required>
</div>
<div class="form-group">
    <label for="editLongitude">Longitude</label>
    <input type="number" class="form-control" id="editLongitude" name="longitude" value="<?php echo e($branch->longitude); ?>" step="any" required>
</div>

                                    <div class="form-group">
                                        <label for="editDetails">Details</label>
                                        <input type="text" class="form-control" id="editDetails" name="details" value="<?php echo e($branch->details); ?>" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Update Branch</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <!-- Add Branch Form -->
                <div class="modal fade" id="addBranchModal" tabindex="-1" role="dialog" aria-labelledby="addBranchModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addBranchModalLabel">Add New Branch</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
    <form action="<?php echo e(route('storebranch')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="editBranchName">Branch</label>
            <input type="text" class="form-control" id="editBranchName" name="name" value="" required>
        </div>
        <div class="form-group">
            <label for="editAddress">Address</label>
            <input type="text" class="form-control" id="editAddress" name="address" value="" required>
        </div>
        <div class="form-group">
    <label for="editLatitude">Latitude</label>
    <input type="number" class="form-control" id="editLatitude" name="latitude" value="<?php echo e($branch->latitude); ?>" step="any" required>
</div>
<div class="form-group">
    <label for="editLongitude">Longitude</label>
    <input type="number" class="form-control" id="editLongitude" name="longitude" value="<?php echo e($branch->longitude); ?>" step="any" required>
</div>

        <div class="form-group">
            <label for="editDetails">Details</label>
            <input type="text" class="form-control" id="editDetails" name="details" value="">
        </div>
        <button type="submit" class="btn btn-success">Add Branch</button>
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
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
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
<?php /**PATH C:\xampp\htdocs\ccp\ccproj\resources\views/admin/addbranch.blade.php ENDPATH**/ ?>