 
<?php $__env->startSection('title', 'Refill Decants'); ?> 
<?php $__env->startSection('content'); ?>

<style>
    .fade-in-bg {
        animation: fadeIn 2s ease-in-out forwards;
        opacity: 40;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% { 
            opacity: 1;
        }
    }
</style>

<!-- Main container -->
<div class="container mx-auto p-8 bg-purple">

    <!-- Refill Overview Section with Cream and Peach Tones -->
    <div class="bg-gradient-to-r from-blue-300 via-peach-400 to-cream text-black p-8 rounded-xl shadow-xl relative overflow-hidden bg-cover bg-center bg-no-repeat parallax fade-in-bg" style="background-image: url('refillwall.jpeg');">

        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative z-10">
        <h2 class="text-4xl font-extrabold leading-tight mb-6 animate__animated animate__fadeIn animate__delay-1s animate__duration-3s">Refill Your Perfume Decants</h2>
        <p class="text-lg mb-8 animate__animated animate__fadeIn animate__delay-2s animate__duration-3s">
            Conveniently refill your favorite premium decants with our seamless refill service. Choose your preferred scents from our extensive selection and keep your signature style alive. Each refill is affordably priced and delivered directly to your doorstep.
        </p>
        
    </div>
    </div>

    
<!-- Refill Form Section -->
<div class="mt-8 p-8 bg-white rounded-xl shadow-xl max-w-lg mx-auto">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Refill Request</h2>

    <form action="<?php echo e(route('refilling_request.store')); ?>" method="POST" class="space-y-6">
        <?php echo csrf_field(); ?>

        <!-- User Address -->
        <div class="flex flex-col">
            <label for="address" class="text-lg font-medium text-gray-700">Address:</label>
            <input type="text" id="address" name="address" 
                   placeholder="Enter your address" required 
                   class="mt-2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
        </div>

        <!-- User Phone Number -->
        <div class="flex flex-col">
            <label for="phone_number" class="text-lg font-medium text-gray-700">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" 
                   placeholder="Enter your phone number" required 
                   class="mt-2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
        </div>

        <!-- Select Decant -->
        <div class="flex flex-col">
            <label for="decant_name" class="text-lg font-medium text-gray-700">Select Decant:</label>
            <select id="decant_name" name="decant_id" required 
                    class="mt-2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
                <option value="" disabled selected>Select a decant</option>
                <?php $__currentLoopData = $decants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $decant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($decant->id); ?>" data-base-price="<?php echo e($decant->price); ?>">
                        <?php echo e($decant->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!-- Decant Size -->
        <div class="flex flex-col">
            <label for="size" class="text-lg font-medium text-gray-700">Size:</label>
            <select id="size" name="size" required 
                    class="mt-2 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:outline-none">
                <option value="5ml" data-multiplier="1">5ml</option>
                <option value="10ml" data-multiplier="2">10ml</option>
            </select>
        </div>

        <!-- Price (Read-Only) -->
        <div class="flex flex-col">
            <label for="price" class="text-lg font-medium text-gray-700">Price:</label>
            <input type="text" id="price" name="price" readonly 
                   class="mt-2 p-3 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none">
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="submit" 
                    class="w-full bg-purple-600 text-white py-3 rounded-lg shadow-md hover:bg-purple-700 transition duration-300">
                Submit Request
            </button>
        </div>
    </form>
</div>
</div>

<script>
const decantSelect = document.querySelector('#decant_name');
const sizeSelect = document.querySelector('#size');
const priceInput = document.querySelector('#price');

function updatePrice() {
    const selectedDecant = decantSelect.options[decantSelect.selectedIndex];
    const selectedSize = sizeSelect.options[sizeSelect.selectedIndex];

    const basePrice = parseFloat(selectedDecant.dataset.basePrice || 0);
    const multiplier = parseFloat(selectedSize.dataset.multiplier || 1);

    const finalPrice = basePrice * multiplier;
    priceInput.value = finalPrice.toFixed(2);
}

// Update price when decant or size is changed
decantSelect.addEventListener('change', updatePrice);
sizeSelect.addEventListener('change', updatePrice);

// Initialize price on page load
window.addEventListener('load', updatePrice);
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2nd Year\2nd semester\CC\CC\CC\ccproj\resources\views/decantrefill.blade.php ENDPATH**/ ?>