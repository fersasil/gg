<?php $__env->startSection('content'); ?>
    <div>
        Home Page <?php echo e(env('NON_EXISTING_ENV_VALUE', 'Value Default To Me!!')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gui/Desktop/authorize-slim-4-9cd9a78e38675bd8175df9376854132f9aee75b4/resources/views/auth/home.blade.php ENDPATH**/ ?>