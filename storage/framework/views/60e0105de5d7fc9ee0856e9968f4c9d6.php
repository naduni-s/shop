 <!-- Extends the layout -->

<?php $__env->startSection('title', 'Unisex Page'); ?> <!-- Sets the page title -->

<?php $__env->startSection('content'); ?>
    <!-- Content Section -->
    <div class="container mx-auto py-8 px-4">
        <!-- Filter by Price Section -->
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2"> 
            <form method="GET" action="<?php echo e(route('filter.unisex')); ?>" class="flex items-center space-x-2">
                <label class="text-sm font-medium">Filter by price</label>
                <input type="range" id="price-range" name="max_price" class="w-40" min="700" max="3000" value="3000" step="100" oninput="updatePrice()">
                <span class="text-sm">Price LKR <span id="price-min">700</span> - LKR <span id="price-max">3000</span></span>
                <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">Filter</button>
            </form>
            </div>
        </div>

        <h2 class="text-xl font-bold mt-8">Unisex</h2>
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
    </div>
    <script>
    const priceRange = document.getElementById('price-range');
    const priceMax = document.getElementById('price-max');

    function updatePrice() {
        priceMax.textContent = priceRange.value;
    }

    priceRange.addEventListener('input', updatePrice);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\ccproj\resources\views/unisex.blade.php ENDPATH**/ ?>