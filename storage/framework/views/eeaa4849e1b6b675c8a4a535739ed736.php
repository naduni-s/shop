

<?php $__env->startSection('title', 'Request Summary'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-4">My Requests</h1>

    <?php if($requests->isEmpty()): ?>
        <p class="text-gray-500">No requests found.</p>
    <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border p-4 rounded-lg shadow-lg">
                    <h2 class="text-lg font-medium"><?php echo e($request->decant->name ?? 'N/A'); ?></h2>
                    <p class="text-sm text-gray-500">Size: <?php echo e($request->size); ?></p>
                    <p class="text-sm text-gray-500">Price: Rs.<?php echo e(number_format($request->price, 2)); ?></p>
                    <p class="text-sm text-gray-500">Status:
                        <?php if($request->status === 'Pending'): ?>
                            <span class="text-yellow-500 font-bold">Pending</span>
                        <?php elseif($request->status === 'Approved'): ?>
                            <span class="text-green-500 font-bold">Approved</span>
                        <?php elseif($request->status === 'Paid'): ?>
                            <span class="text-blue-500 font-bold">Paid</span>
                        <?php elseif($request->status === 'Rejected'): ?>
                            <span class="text-red-500 font-bold">Rejected</span>
                        <?php endif; ?>
                    </p>

                    <?php if($request->status === 'Approved'): ?>
                    <form action="<?php echo e(route('stripe')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="decant_name" value="<?php echo e($request->decant->name ?? 'N/A'); ?>">
                        <input type="hidden" name="size" value="<?php echo e($request->size); ?>">
                        <input type="hidden" name="price" value="<?php echo e($request->price); ?>">
                        <input type="hidden" name="full_name" value="<?php echo e($request->user->name ?? 'N/A'); ?>">

                        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg">
                            Pay Now
                        </button>
                    </form>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2nd Year\2nd semester\CC\CC\CC\ccproj\resources\views/requests.blade.php ENDPATH**/ ?>