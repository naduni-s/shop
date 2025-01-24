<!-- resources/views/search-results.blade.php -->


<?php $__env->startSection('title', 'Search Results'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto py-8 px-4">
    <h2 class="text-xl font-bold">Search Results for "<?php echo e($query); ?>"</h2>

    <?php if($products->isEmpty()): ?>
        <p class="mt-4 text-gray-600">No products found matching your search.</p>
    <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-4">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                <a href="<?php echo e(route('product.detail', $product->id)); ?>">   
                <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-40 object-contain mb-2"><p class="mt-2 font-semibold"><?php echo e($product->name); ?></p>
                    <p class="text-sm text-gray-700">LKR <?php echo e(number_format($product->price, 2)); ?></p>
                </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\ccproj\resources\views/search-results.blade.php ENDPATH**/ ?>