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

    <style>
        .card {
    transition: transform 0.2s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover; /* Makes the image cover the space */
    border-bottom: 1px solid #ddd; /* Optional: Adds a line to separate image */
}

.card-body {
    flex-grow: 1;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
}

.card-text {
    font-size: 1rem;
    color: #555;
}

.btn-primary, .btn-danger {
    border-radius: 5px;
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

.card:hover {
    transform: scale(1.05);
}
    
        .btn-primary {
            background-color: #4e73df;
            border: none;
        }
    
        .btn-danger {
            background-color: #e74a3b;
            border: none;
        }
    
        .modal-content {
            padding: 20px;
            border-radius: 10px;
        }
        #productImage {
            display: block;
            width: 100%;
            overflow: hidden; 
            text-overflow: ellipsis; 
}

    </style>
    

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

           
          <!-- Nav Item - decant Collapse Menu -->
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e($userName); ?></span>
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
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
    Logout
</a>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Unisex Products</h1>
                    </div>

                    <!-- Display validation errors -->
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

                    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#addProductModal">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Add New Product</span>
                    </a>
                    
                 <br><br><br>
                    
                 <div class="row">
    <?php $__currentLoopData = $unisexproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <?php if($product->image_url): ?>
                    <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-20 object-contain mb-2">
                <?php else: ?>
                    <div class="w-full h-20 d-flex align-items-center justify-content-center bg-light mb-2">
                        <i class="fas fa-image fa-2x text-muted"></i>
                    </div>
                <?php endif; ?>

                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo e($product->name); ?></h5>
                    <p class="card-text text-success">LKR<?php echo e($product->price); ?></p>
                    <p class="card-text"><?php echo e($product->description); ?></p>

                    <!-- Tags Section -->
                    <div>
                        <?php if($product->tags): ?>
                            <?php $__currentLoopData = explode(',', $product->tags); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="badge badge-secondary"><?php echo e($tag); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <span class="badge badge-light">No tags</span>
                        <?php endif; ?>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <!-- Edit Button -->
                        <button class="btn btn-primary btn-sm me-2" data-toggle="modal" data-target="#editProductModal<?php echo e($product->id); ?>">Edit</button>
                        <!-- Delete Button -->
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProductModal<?php echo e($product->id); ?>">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Product Modal -->
        <div class="modal fade" id="editProductModal<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel<?php echo e($product->id); ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel<?php echo e($product->id); ?>">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(route('updateunisexproduct', $product->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo e($product->name); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input type="text" class="form-control" name="price" value="<?php echo e($product->price); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" required><?php echo e($product->description); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags (comma-separated)</label>
                                <input type="text" class="form-control" name="tags" value="<?php echo e($product->tags); ?>">
                            </div>

                            <div class="form-group">
                                <label for="image_url">Product Image</label>
                                <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>" class="w-100 mb-2" style="max-height: 150px;">
                                <input type="file" class="form-control" name="image_url" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteProductModal<?php echo e($product->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel<?php echo e($product->id); ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteProductModalLabel<?php echo e($product->id); ?>">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete <strong><?php echo e($product->name); ?></strong>?
                    </div>
                    <div class="modal-footer">
                        <form action="<?php echo e(route('destroyunisexproduct', $product->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('storeunisexproduct')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags (comma-separated)</label>
                        <input type="text" class="form-control" name="tags" value="<?php echo e(old('tags')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="image_url">Product Image</label>
                        <input type="file" class="form-control" name="image_url" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-success">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to preview the selected image -->
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('previewImage');
            preview.src = reader.result;

            // Show the preview div
            document.getElementById('imagePreview').style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>





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

</html><?php /**PATH C:\Users\User\Desktop\dewan\ccproj (3)\ccproj\resources\views/admin/unisexproduct.blade.php ENDPATH**/ ?>