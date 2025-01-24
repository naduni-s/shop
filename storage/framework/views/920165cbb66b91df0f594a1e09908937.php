

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

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('delivery.dashboard')); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Scentsation Store</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('delivery.dashboard')); ?>">
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
    <a class="nav-link collapsed" href=" <?php echo e(route('normalorder')); ?>" aria-expanded="true" aria-controls="">
        <i class="fas fa-flask"></i>
        <span>Normal Orders</span>
    </a>
</li>


          <!-- Nav Item - branch Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo e(route('refillorders')); ?>" aria-expanded="true" aria-controls="">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
<!-- Order Details Table -->
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Normal Order Details</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Postal Code</th>
                                <th>Ordered Products</th> <!-- New column for Products -->
                                <th>Total Price</th>
                                <th>Payment Method</th>
                                <th>Order Date</th>
                                <th>Update Status</th>

                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($order->id); ?></td>
                                    <td><?php echo e($order->name); ?></td>
                                    <td><?php echo e($order->phone); ?></td>
                                    <td><?php echo e($order->address); ?></td>
                                    <td><?php echo e($order->postal_code); ?></td>
                                    <td>
                                        <?php
                                            $products = json_decode($order->products, true);
                                        ?>
                                        <?php if(is_array($products)): ?>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div>
                                                   Perfume Name:- <?php echo e($item['name']); ?> <br>Size:- <?php echo e($item['size']); ?> <br> Quantity:- <?php echo e($item['quantity']); ?>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <p>No products available</p>
                                        <?php endif; ?>
                                    </td>
                                    <td>LKR <?php echo e(number_format($order->total_price, 2)); ?></td>
                                    <td><?php echo e($order->payment_method); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($order->created_at)->format('d-m-Y H:i')); ?></td>
                                    
                                    
                                    <td>
                                        <form action="<?php echo e(route('orders.updateStatus', $order->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <select name="delivery_status" class="form-control" required>
                                                <option value="Pending" <?php echo e($order->delivery_status == 'Pending' ? 'selected' : ''); ?>>Pending</option>
                                                <option value="Processing" <?php echo e($order->delivery_status == 'Processing' ? 'selected' : ''); ?>>Processing</option>
                                                <option value="Shipped" <?php echo e($order->delivery_status == 'Shipped' ? 'selected' : ''); ?>>Shipped</option>
                                                <option value="Delivered" <?php echo e($order->delivery_status == 'Delivered' ? 'selected' : ''); ?>>Delivered</option>
                                                <option value="Cancelled" <?php echo e($order->delivery_status == 'Cancelled' ? 'selected' : ''); ?>>Cancelled</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm mt-2">Update</button>
                                        </form>

                                        <!-- Delete Order Form -->
    <form action="<?php echo e(route('orders.delete', $order->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
                                    </td>
                                    
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
<?php /**PATH C:\xampp\htdocs\ccp\ccproj\resources\views/delivery/normalorder.blade.php ENDPATH**/ ?>