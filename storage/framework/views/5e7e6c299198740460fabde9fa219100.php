 
<?php $__env->startSection('title', 'Home Page'); ?> 
<?php $__env->startSection('content'); ?>

    <!-- Blurred background under the cards -->
    <div class="relative bg-cover bg-center bg-no-repeat h-[1200px] md:h-[1400px] rounded-lg" style="background-image: url('wallpaper.jpg');">
        <!-- Apply the blur effect to the background -->
        <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-lg"></div>

        <!-- The Card Container -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative z-10 p-8">
    <!-- Card 1 -->
    <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden fade-in-card">
        <img src="refill.jpg" alt="Decant Refilling" class="w-full h-auto object-cover md:h-60">
        <div class="p-2">
            <h3 class="text-lg font-semibold mb-2">Decant Refilling</h3>
            <p class="text-gray-700 text-sm">
                Experience a sustainable way to indulge in luxury scents! With our decant refilling service, you can refill your perfumes in just the right amount, helping to minimize waste while enjoying your favorite fragrances.
            </p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden fade-in-card">
        <img src="recom.jpg" alt="Perfume Recommender" class="w-full h-auto object-cover md:h-60">
        <div class="p-2">
            <h3 class="text-lg font-semibold mb-2">Perfume Recommender</h3>
            <p class="text-gray-700 text-sm">
                Not sure which scent to choose? Use our Perfume Recommender to discover personalized fragrance suggestions tailored to your preferences and mood.
            </p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden fade-in-card">
        <img src="locator.jpg" alt="Branch Locator" class="w-full h-auto object-cover md:h-60">
        <div class="p-2">
            <h3 class="text-lg font-semibold mb-2">Branch Locator</h3>
            <p class="text-gray-700 text-sm">
                Find the nearest branch for convenient refills and in-store services. Use our Branch Locator to explore locations closest to you for a seamless shopping experience.
            </p>
        </div>
    </div>
</div>

    </div>
    <br>
    <div class="mb-8">
    <div class="flex items-center justify-between mb-4">
        <div class="relative mr-6"> 
            <img src="formen.jpg" alt="For Men" class="w-48 h-48 object-cover rounded-md">
            <span class="absolute top-2 left-2 bg-black text-white text-lg font-semibold px-3 py-1 rounded">For Men</span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full">
            <?php $__currentLoopData = $menProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white p-4 rounded transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                    <a href="<?php echo e(route('product.detail', $product->id)); ?>">
                        <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-auto object-cover mb-2">
                        <h3 class="font-medium"><?php echo e($product->name); ?></h3>
                        <p class="text-gray-500">Rs. <?php echo e(number_format($product->price, 2)); ?></p>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Arrow next to For Men section -->
        <a href="<?php echo e(route('formen')); ?>" class="text-white bg-black p-2 rounded-full hover:bg-gray-700 ml-6 flex items-center justify-center">
            <span class="text-2xl">&gt;</span> <!-- Arrow symbol -->
        </a>
    </div>
</div>


    <!-- For Women Section -->
    <div class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <div class="relative mr-6"> 
                <img src="forwomen.jpg" alt="For Women" class="w-48 h-48 object-cover rounded-md">
                <span class="absolute top-2 left-2 bg-black text-white text-lg font-semibold px-3 py-1 rounded">For Women</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full">
                <?php $__currentLoopData = $womenProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white p-4 rounded transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                        <a href="<?php echo e(route('product.detail', $product->id)); ?>">
                            <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-auto object-cover mb-2">
                            <h3 class="font-medium"><?php echo e($product->name); ?></h3>
                            <p class="text-gray-500">Rs. <?php echo e(number_format($product->price, 2)); ?></p>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e(route('forwomen')); ?>" class="text-white bg-black p-2 rounded-full hover:bg-gray-700 ml-6 flex items-center justify-center">
            <span class="text-2xl">&gt;</span> <!-- Arrow symbol -->
        </a>
        </div>
    </div>

    <!-- Unisex Section -->
    <div class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <div class="relative mr-6"> 
                <img src="unisex.jpg" alt="Unisex" class="w-48 h-48 object-cover rounded-md">
                <span class="absolute top-2 left-2 bg-black text-white text-lg font-semibold px-3 py-1 rounded">Unisex</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full">
                <?php $__currentLoopData = $unisexProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white p-4 rounded transition-transform duration-300 transform hover:scale-105 hover:shadow-lg">
                        <a href="<?php echo e(route('product.detail', $product->id)); ?>">
                            <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-auto object-cover mb-2">
                            <h3 class="font-medium"><?php echo e($product->name); ?></h3>
                            <p class="text-gray-500">Rs. <?php echo e(number_format($product->price, 2)); ?></p>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e(route('unisex')); ?>" class="text-white bg-black p-2 rounded-full hover:bg-gray-700 ml-6 flex items-center justify-center">
            <span class="text-2xl">&gt;</span> <!-- Arrow symbol -->
        </a>
        </div>
    </div>

    <div class="relative h-48 md:h-64 mb-8"> 
        <img src="<?php echo e(asset('recwall.jpg')); ?>" alt="Perfume Image 1" class="w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40">
            <p class="text-white text-xl md:text-2xl font-semibold text-center px-4">
                Let us choose a perfume according to your liking.
            </p>
        </div>
        
    </div>
    <br>
<!-- Reviews Section -->
<div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md mt-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Customer Reviews</h2>

    <!-- Check if reviews exist -->
    <?php if($reviews->isEmpty()): ?>
        <p class="text-gray-500 text-center">No reviews yet. Be the first to leave a review!</p>
    <?php else: ?>
        <!-- Reviews Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white p-6 rounded-lg shadow flex flex-col items-start space-y-4">
                    <!-- User Avatar Placeholder -->
                    <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-bold">
                        <?php echo e(strtoupper(substr($review->user->name, 0, 1))); ?>

                    </div>
                    
                    <!-- Review Content -->
                    <div class="w-full">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-semibold text-lg text-gray-800"><?php echo e($review->user->name); ?></h3>
                            <p class="text-sm text-gray-500"><?php echo e($review->created_at->format('d M, Y')); ?></p>
                        </div>

                        <!-- Rating -->
                        <div class="text-yellow-500 my-1">
                             <!-- Review Text -->
                        <p class="text-gray-700 leading-relaxed mt-2"><?php echo e($review->review); ?></p>
                            <?php for($i = 1; $i <= $review->rating; $i++): ?>
                                ★
                            <?php endfor; ?>
                            <?php for($i = $review->rating + 1; $i <= 5; $i++): ?>
                                ☆
                            <?php endfor; ?>
                        </div>

                       
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<br><br>
<!-- Add Review Form -->
<div class="mt-6 p-6 bg-gray-100 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Tell Us About Your Experience </h2>
    <?php if(auth()->guard()->check()): ?>
        <form action="<?php echo e(route('reviews.store', $product->id)); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?>
            <!-- Review Textarea -->
            <div>
                <label for="review" class="block text-sm font-medium text-gray-700">Your Review</label>
                <textarea 
                    name="review" 
                    id="review" 
                    rows="4" 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your review here..." 
                    required>
                </textarea>
            </div>

            <!-- Rating Dropdown -->
            <div>
                <label for="rating" class="block text-sm font-medium text-gray-700">Your Rating</label>
                <select 
                    name="rating" 
                    id="rating" 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-yellow-500"
                    required>
                    <option value="5" class="text-yellow-500">★★★★★ (5 Stars)</option>
                    <option value="4" class="text-yellow-500">★★★★☆ (4 Stars)</option>
                    <option value="3" class="text-yellow-500">★★★☆☆ (3 Stars)</option>
                    <option value="2" class="text-yellow-500">★★☆☆☆ (2 Stars)</option>
                    <option value="1" class="text-yellow-500">★☆☆☆☆ (1 Star)</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-blue-900 text-white font-medium py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition">
                Submit Review
            </button>
        </form>
    <?php else: ?>
    <p class="text-center text-gray-500 mt-4">
        Please 
        <a href="<?php echo e(route('login')); ?>" class="text-blue-500 underline hover:text-blue-700">
            login
        </a> 
        to leave a review.
    </p>
    <?php endif; ?>
</div>

</div>
<style>
    /* Custom fade-in animation */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Applying fade-in effect */
    .fade-in-card {
        opacity: 0; /* Initially hide the cards */
        animation: fadeIn 1s ease-in-out forwards;
    }

    /* Delay animations for each card */
    .fade-in-card:nth-child(1) {
        animation-delay: 0.2s;
    }
    .fade-in-card:nth-child(2) {
        animation-delay: 0.4s;
    }
    .fade-in-card:nth-child(3) {
        animation-delay: 0.6s;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ccp\ccproj\resources\views/home.blade.php ENDPATH**/ ?>