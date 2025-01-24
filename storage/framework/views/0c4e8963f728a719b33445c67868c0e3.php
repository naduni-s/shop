<!-- Checkout Page -->

<?php $__env->startSection('title', 'Checkout'); ?>
<?php $__env->startSection('content'); ?>

<h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Checkout</h1>

<form id="checkout-form" action="<?php echo e(route('order.confirm')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="flex justify-between gap-12">

    <div class="w-full md:w-1/2 bg-gradient-to-br from-blue-50 to-blue-200 p-6 rounded-lg shadow-xl border border-gray-300">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Delivery Details</h2>

            <div class="mb-4">
    <label for="name" class="block text-gray-600">Full Name*</label>
    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
    <p id="name-error" class="text-red-500 text-sm hidden">Please enter a valid full name.</p>
</div>

<div class="mb-4">
    <label for="phone" class="block text-gray-600">Phone Number*</label>
    <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
    <p id="phone-error" class="text-red-500 text-sm hidden">Please enter a valid 10-digit phone number.</p>
</div>

<div class="mb-4">
    <label for="address" class="block text-gray-600">Address*</label>
    <textarea id="address" name="address" required rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
</div>

<div class="mb-4">
    <label for="postal_code" class="block text-gray-600">Postal Code*</label>
    <input type="text" id="postal_code" name="postal_code" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
    <p id="postal-code-error" class="text-red-500 text-sm hidden">Please enter a valid 5-digit postal code.</p>
</div>

        </div>

        <div class="w-full md:w-1/2 bg-gradient-to-br from-pink-50 to-pink-200 p-6 rounded-lg shadow-xl border border-gray-300">
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Order Summary</h2>
                <div class="text-lg text-gray-700">
                    <?php
                        $subtotal = 0;
                        $courierCharge = 400;
                    ?>

                    <table class="min-w-full">
                        <thead>
                            <tr class="border-b">
                                <th class="px-4 py-2 text-left">Product</th>
                                <th class="px-4 py-2 text-left">Size</th>
                                <th class="px-4 py-2 text-left">Price</th>
                                <th class="px-4 py-2 text-left">Quantity</th>
                                <th class="px-4 py-2 text-left">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $itemTotal = $item['price'] * $item['quantity'];
                                    $subtotal += $itemTotal;
                                ?>
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-sm"><?php echo e($item['name']); ?></td>
                                    <td class="px-4 py-2 text-sm"><?php echo e($item['size'] ?? 'N/A'); ?></td>
                                    <td class="px-4 py-2 text-sm">LKR <?php echo e(number_format($item['price'], 2)); ?></td>
                                    <td class="px-4 py-2 text-sm"><?php echo e($item['quantity']); ?></td>
                                    <td class="px-4 py-2 text-sm">LKR <?php echo e(number_format($itemTotal, 2)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <p class="text-lg">Subtotal: LKR <?php echo e(number_format($subtotal, 2)); ?></p>
                    <p class="text-lg">Courier Charge: LKR <?php echo e(number_format($courierCharge, 2)); ?></p>
                    <p class="font-semibold text-2xl">
                        <span>Total:</span>
                        <span id="total-amount">LKR <?php echo e(number_format($subtotal + $courierCharge, 2)); ?></span>
                    </p>
                </div>
            </div>

            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Payment Method</h2>
                <div class="flex items-center">
                    <input type="radio" id="cod" name="payment_method" value="Cash on Delivery" class="mr-2" checked>
                    <label for="cod" class="text-gray-600">Cash on Delivery</label>
                </div>
                <p id="payment-method-error" class="text-red-500 text-sm hidden">Please select a payment option.</p>
            </div>

            <button type="button" id="place-order-btn" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-200 w-full">
                Place Order
            </button>
        </div>

    </div>
    <input type="hidden" name="total_price" value="<?php echo e($subtotal + $courierCharge); ?>">
</form>

<script>
    document.getElementById('place-order-btn').addEventListener('click', async (e) => {
    e.preventDefault(); // Prevent default action

    // Form and field references
    const checkoutForm = document.getElementById('checkout-form');
    const nameField = document.getElementById('name');
    const phoneField = document.getElementById('phone');
    const addressField = document.getElementById('address');
    const postalCodeField = document.getElementById('postal_code');

    // Error message elements
    const nameError = document.getElementById('name-error');
    const phoneError = document.getElementById('phone-error');
    const postalCodeError = document.getElementById('postal-code-error');

    // Regex patterns
    const namePattern = /^[a-zA-Z\s.]+$/;
    const phonePattern = /^\d{10}$/;
    const postalCodePattern = /^\d{5}$/;

    // Reset error messages
    nameError.classList.add('hidden');
    phoneError.classList.add('hidden');
    postalCodeError.classList.add('hidden');

    let isValid = true;

    // Validate Full Name
    if (!namePattern.test(nameField.value)) {
        nameError.classList.remove('hidden');
        isValid = false;
    }

    // Validate Phone Number
    if (!phonePattern.test(phoneField.value)) {
        phoneError.classList.remove('hidden');
        isValid = false;
    }

    // Validate Postal Code
    if (!postalCodePattern.test(postalCodeField.value)) {
        postalCodeError.classList.remove('hidden');
        isValid = false;
    }

    // Validate empty fields
    if (!nameField.value || !phoneField.value || !addressField.value || !postalCodeField.value) {
        alert("Please fill in all required fields.");
        return;
    }

    // Submit the form if all validations pass
    if (isValid) {
        try {
            checkoutForm.submit(); // Submit the form

            // Clear the cart session
            await fetch('/cart/clear', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            alert("Order placed successfully!");
            window.location.href = '/';
        } catch (error) {
            console.error('Error during order submission:', error);
            
        }
    }
});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\2nd Year\2nd semester\CC\CC\CC\ccproj\resources\views/checkout.blade.php ENDPATH**/ ?>