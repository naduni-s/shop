

<?php $__env->startSection('title', 'Payment Success'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold text-green-500">Payment Successful!</h1>
    <p>Thank you for your payment. Your transaction was successfully processed.</p>
    <a href="<?php echo e(route('home')); ?>" class="text-blue-500 hover:underline">Return to Home</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ccp\ccproj\resources\views/success.blade.php ENDPATH**/ ?>