

<?php $__env->startSection('title', 'Perfume Recommender'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-12">
    <!-- Hero Section with Background Image -->
    <div class="relative h-96 bg-gradient-to-r from-indigo-200 via-purple-500 to-pink-200">
    <!-- Glass Effect -->
    <div class="absolute inset-0 bg-white bg-opacity-30 backdrop-blur-md"></div>
    <div class="relative z-10 flex items-center justify-center h-full">
        <h1 class="text-5xl font-bold text-black text-center leading-tight">Find Your Perfect Perfume</h1>
        <a href="#form" class="mt-6 inline-block bg-indigo-500 text-white py-3 px-8 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300">Get Started</a>
    </div>
</div>


    <!-- Form Section -->
    <form action="<?php echo e(route('recommender')); ?>" method="GET" id="form" class="bg-white shadow-2xl rounded-lg p-8 max-w-10xl mx-auto mb-10 mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Scent Type -->
            <div class="space-y-4">
                <label for="scent_type" class="block text-lg font-medium text-gray-700">What type of scent do you prefer*
                    <!-- Tooltip Icon -->
                    <span class="relative inline-block cursor-pointer group">
                        <i class="fas fa-info-circle text-gray-500 ml-2"></i>
                        <!-- Tooltip -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 w-96 bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-sm rounded-lg p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-xl">
                            <p><strong class="font-semibold">Floral:</strong> Soft, sweet scent like flowers.</p>
                            <p><strong class="font-semibold">Woody:</strong> Rich, earthy scent like woods and moss.</p>
                            <p><strong class="font-semibold">Fruity:</strong> Fresh, sweet scent like fruits.</p>
                            <p><strong class="font-semibold">Citrus:</strong> Zesty, tangy scent like lemons or oranges.</p>
                            <p><strong class="font-semibold">Fresh:</strong> Clean and airy, like fresh air or linen.</p>
                            <p><strong class="font-semibold">Spicy:</strong> Warm and exotic, like spices and herbs.</p>
                            <p><strong class="font-semibold">Oriental:</strong> Sensual with a mix of spices and flowers.</p>
                            <p><strong class="font-semibold">Aromatic:</strong> Herbaceous and often green, like lavender.</p>
                            <p><strong class="font-semibold">Aquatic:</strong> Fresh and oceanic, like water or sea breeze.</p>
                        </div>
                    </span>
                </label>
                <select name="scent_type" id="scent_type" class="block w-full px-5 py-3 rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-indigo-300 transition duration-300 ease-in-out" required>
                    <option value="" disabled selected>-- Select Scent Type --</option>
                    <option value="floral">Floral</option>
                    <option value="woody">Woody</option>
                    <option value="fruity">Fruity</option>
                    <option value="citrus">Citrus</option>
                    <option value="fresh">Fresh</option>
                    <option value="spicy">Spicy</option>
                    <option value="oriental">Oriental</option>
                    <option value="aromatic">Aromatic</option>
                    <option value="aquatic">Aquatic</option>
                </select>
            </div>

            <!-- Scent Combination -->
            <div class="space-y-4">
                <label for="scent_combination" class="block text-lg font-medium text-gray-700">What fragrance blends do you enjoy</label>
                <select name="scent_combination" id="scent_combination" class="block w-full px-5 py-3 rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-indigo-300 transition duration-300 ease-in-out">
                    <option value="" disabled selected>-- Select Scent Combination --</option>
                    <option value="fresh_and_woody">Fresh and Woody</option>
                    <option value="citrus_and_aromatic">Citrus and Aromatic</option>
                    <option value="floral_and_sweet">Floral and Sweet</option>
                    <option value="spicy_and_warm">Spicy and Warm</option>
                    <option value="fruity_and_floral">Fruity and Floral</option>
                    <option value="woody_and_smoky">Woody and Smoky</option>
                    <option value="citrus_and_spicy">Citrus and Spicy</option>
                    <option value="oriental_and_earthy">Oriental and Earthy</option>
                    <option value="sweet_and_powdery">Sweet and Powdery</option>
                </select>
            </div>

            <!-- Fragrance Intensity -->
            <div class="space-y-4">
                <label for="fragrance_intensity" class="block text-lg font-medium text-gray-700">
                    Fragrance Intensity*
                    <!-- Tooltip Icon -->
                    <span class="relative inline-block cursor-pointer group">
                        <i class="fas fa-info-circle text-gray-500 ml-2"></i>
                        <!-- Tooltip -->
                        <div class="absolute left-1/2 transform -translate-x-1/2 bottom-full mb-1 w-80 bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-sm rounded-lg p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 shadow-xl">
                            <p>Refers to how strong and long-lasting a perfume's scent is. 
                            <ul class="list-disc list-inside">
                                <li><strong>Light:</strong> Subtle and delicate, ideal for casual or close-contact settings.</li>
                                <li><strong>Medium:</strong> Balanced intensity, suitable for both day and evening wear.</li>
                                <li><strong>Strong:</strong> Bold and pronounced, perfect for formal events or making a statement.</li>
                            </ul>
                            </p>
                        </div>
                    </span>
                </label>
                <select name="fragrance_intensity" id="fragrance_intensity" class="block w-full px-5 py-3 rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-indigo-300 transition duration-300 ease-in-out" required>
                    <option value="" disabled selected>-- Select Fragrance Intensity --</option>
                    <option value="light">Light</option>
                    <option value="medium">Medium</option>
                    <option value="strong">Strong</option>
                </select>
            </div>

            <!-- Occasion -->
            <div class="space-y-4">
                <label for="occasion" class="block text-lg font-medium text-gray-700">Occasion*</label>
                <select name="occasion" id="occasion" class="block w-full px-5 py-3 rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-indigo-300 transition duration-300 ease-in-out" required>
                    <option value="" disabled selected>-- Select Occasion --</option>
                    <option value="casual">Casual</option>
                    <option value="formal">Formal</option>
                    <option value="party">Party</option>
                    <option value="special_occasion">Special Occasion</option>
                    <option value="wedding">Wedding</option>
                    <option value="date_night">Date Night</option>
                    <option value="office">Office</option>
                    <option value="vacation">Vacation</option>
                    <option value="sport">Sport</option>
                    <option value="seasonal">Seasonal</option>
                    <option value="gifting">Gifting</option>
                </select>
            </div>

            <!-- Gender -->
            <div class="space-y-4">
                <label for="gender" class="block text-lg font-medium text-gray-700">Preferred Gender*</label>
                <select name="gender" id="gender" class="block w-full px-5 py-3 rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-indigo-300 transition duration-300 ease-in-out" required>
                    <option value="" disabled selected>-- Select Gender --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unisex">Unisex</option>
                </select>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-6">
            <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300 transform hover:scale-105">
                Get Recommendations
            </button>
        </div>
    </form>

    <!-- Results Section -->
    <?php if($recommendedProducts->isEmpty()): ?>
        <div class="flex flex-col items-center justify-center text-center mt-8">
            <i class="fas fa-frown text-6xl text-gray-400 mb-4"></i>
            <p class="text-xl text-gray-600">No products found that match your preferences.</p>
        </div>
    <?php else: ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-10">
            <?php $__currentLoopData = $recommendedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white shadow-xl rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <!-- Product Image -->
                    <?php if($product->image_url): ?>
                        <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-48 object-cover transition duration-300 ease-in-out">
                    <?php else: ?>
                        <div class="flex items-center justify-center w-full h-48 bg-gray-200">
                            <i class="fas fa-image text-gray-400 text-4xl"></i>
                        </div>
                    <?php endif; ?>

                    <!-- Product Details -->
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-semibold text-gray-800"><?php echo e($product->name); ?></h5>
                        <p class="text-green-500 text-sm font-medium mb-2">LKR <?php echo e(number_format($product->price, 2)); ?></p>
                        <p class="text-gray-600 text-sm mb-4"><?php echo e($product->description); ?></p>
                        <a href="<?php echo e(route('product.detail', $product->id)); ?>" class="text-indigo-600 hover:underline font-medium">View Details</a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\dewan\ccproj (3)\ccproj\resources\views/recommender.blade.php ENDPATH**/ ?>