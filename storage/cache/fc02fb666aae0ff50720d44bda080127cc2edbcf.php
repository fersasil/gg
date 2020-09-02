<?php $__env->startSection('content'); ?>
    <div>
        <h1>Welcome <?php echo e($name); ?></h1>
        <small>(Your id is <?php echo e($id); ?>)</small>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gui/Desktop/authorize-slim-4-9cd9a78e38675bd8175df9376854132f9aee75b4/resources/views/user/show.blade.php ENDPATH**/ ?>