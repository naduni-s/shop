

<?php $__env->startSection('title', 'Shopping Cart'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Shopping Cart</h1>

    <?php if(session('cart') && count(session('cart')) > 0): ?>
    <!-- Cart Products Section -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg p-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="border-b">
                    <th class="px-4 py-2 text-left">Product</th>
                    <th class="px-4 py-2 text-left">Price</th>
                    <th class="px-4 py-2 text-left">Quantity</th>
                    <th class="px-4 py-2 text-left">Total</th>
                    <th class="px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productKey => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="border-b">
        <td class="px-4 py-2">
            <div class="flex items-center space-x-4">
                <img src="<?php echo e($product['image_url']); ?>" alt="<?php echo e($product['name']); ?>" class="w-20 h-20 object-cover rounded-lg">
                <span>
            <?php echo e($product['name']); ?> 
            <?php if(isset($product['size'])): ?>
                (<?php echo e($product['size']); ?>)
            <?php endif; ?>
        </span>
            </div>
        </td>
        <td class="px-4 py-2">LKR <?php echo e(number_format($product['price'], 2)); ?></td>

        <td class="px-4 py-2">
            <form action="<?php echo e(route('cart.updatenew', $productKey)); ?>" method="POST" class="inline-block">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <input type="number" name="quantity" value="<?php echo e($product['quantity']); ?>" min="1" class="w-16 p-2 border rounded-lg">
                <button type="submit" class="text-blue-500 hover:text-blue-600 ml-2">Update</button>
            </form>
        </td>
        <td class="px-4 py-2">LKR <?php echo e(number_format($product['quantity'] * $product['price'], 2)); ?></td>
        <td class="px-4 py-2">
            <form action="<?php echo e(route('cart.removenew', $productKey)); ?>" method="POST" class="inline-block">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="text-red-500 hover:text-red-600">Remove</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

        </table>

        <div class="flex justify-between items-center mt-6">
            <div>
                <a href="<?php echo e(route('home')); ?>" class="text-blue-500 hover:text-blue-600">Continue Shopping</a>
            </div>
            <?php
    $total = 0;
    foreach (session('cart') as $product) { 
        $total += $product['price'] * $product['quantity'];
    }
?>
<div class="text-lg font-semibold">
    Total: LKR <?php echo e(number_format($total, 2)); ?>

</div>

        </div>
        
        <div class="mt-6 text-right">
    <?php if(auth()->check()): ?>
        <!-- User is logged in -->
        <a href="<?php echo e(route('checkout')); ?>" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Proceed to Checkout</a>
    <?php else: ?>
        <!-- User is not logged in -->
        <button 
            onclick="alert('Please log in to proceed to checkout.')" 
            class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-900"
        >
            Proceed to Checkout
        </button>
    <?php endif; ?>
</div>

    </div>
    <?php else: ?>
    <p>Your cart is empty. <a href="<?php echo e(route('home')); ?>" class="text-blue-500 hover:text-blue-600">Continue shopping</a></p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2nd Year\2nd semester\CC\CC\CC\ccproj\resources\views/cart.blade.php ENDPATH**/ ?>