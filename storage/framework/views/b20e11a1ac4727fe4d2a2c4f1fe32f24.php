

<?php $__env->startSection('title', 'Order Summary'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-4">My Orders</h1>

    <?php if($orders->isEmpty()): ?>
        <p class="text-gray-500">No orders found.</p>
    <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border p-4 rounded-lg shadow-lg">
                    <h2 class="text-lg font-medium"><?php echo e($order->name); ?></h2>
                    <p class="text-sm text-gray-500">Phone: <?php echo e($order->phone); ?></p>
                    <p class="text-sm text-gray-500">Address: <?php echo e($order->address); ?></p>
                    <p class="text-sm text-gray-500">Postal Code: <?php echo e($order->postal_code); ?></p>

                    <h3 class="text-md font-semibold mt-2">Ordered Products:</h3>
                    <?php
                        $products = json_decode($order->products, true);
                    ?>
                    <?php if(is_array($products)): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="text-sm text-gray-500">
                                Perfume Name: <?php echo e($item['name']); ?><br>
                                Size: <?php echo e($item['size']); ?><br>
                                Quantity: <?php echo e($item['quantity']); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <p>No products available</p>
                    <?php endif; ?>
                    
                    <p class="text-sm text-gray-500 mt-2">Total Price: Rs. <?php echo e(number_format($order->total_price, 2)); ?></p>
                    <p class="text-sm text-gray-500">Payment Method: <?php echo e($order->payment_method); ?></p>
                    
                    <p class="text-sm text-gray-500 mt-2">Delivery Status:
                        <?php if($order->delivery_status === 'Pending'): ?>
                            <span class="text-yellow-500 font-bold">Pending</span>
                        <?php elseif($order->delivery_status === 'Processing'): ?>
                            <span class="text-orange-500 font-bold">Processing</span>
                        <?php elseif($order->delivery_status === 'Shipped'): ?>
                            <span class="text-blue-500 font-bold">Shipped</span>
                        <?php elseif($order->delivery_status === 'Delivered'): ?>
                            <span class="text-green-500 font-bold">Delivered</span>
                        <?php elseif($order->delivery_status === 'Cancelled'): ?>
                            <span class="text-red-500 font-bold">Cancelled</span>
                        <?php endif; ?>
                    </p>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <?php if($requests->isEmpty()): ?>
        <p class="text-gray-500">No refill orders found.</p>
    <?php else: ?>
        <h1 class="text-2xl font-semibold mt-8 mb-4">My Refilling Orders</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border p-4 rounded-lg shadow-lg">
                    <h2 class="text-lg font-medium"><?php echo e($request->user->name ?? 'N/A'); ?></h2>
                    <p class="text-sm text-gray-500">Phone: <?php echo e($request->phone_number); ?></p>
                    <p class="text-sm text-gray-500">Address: <?php echo e($request->address); ?></p>

                    <h3 class="text-md font-semibold mt-2">Decant Details:</h3>
                    <div class="text-sm text-gray-500">
                        Name: <?php echo e($request->decant->name ?? 'N/A'); ?><br>
                        Size: <?php echo e($request->size); ?><br>
                        Price: Rs. <?php echo e(number_format($request->price, 2)); ?>

                    </div>

                    <p class="text-sm text-gray-500 mt-2">Delivery Status:
                        <?php if($request->delivery_status === 'Pending'): ?>
                            <span class="text-yellow-500 font-bold">Pending</span>
                        <?php elseif($request->delivery_status === 'Processing'): ?>
                            <span class="text-orange-500 font-bold">Processing</span>
                        <?php elseif($request->delivery_status === 'Shipped'): ?>
                            <span class="text-blue-500 font-bold">Shipped</span>
                        <?php elseif($request->delivery_status === 'Delivered'): ?>
                            <span class="text-green-500 font-bold">Delivered</span>
                        <?php elseif($request->delivery_status === 'Cancelled'): ?>
                            <span class="text-red-500 font-bold">Cancelled</span>
                        <?php endif; ?>
                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2nd Year\2nd semester\CC\CC\CC\ccproj\resources\views/track.blade.php ENDPATH**/ ?>