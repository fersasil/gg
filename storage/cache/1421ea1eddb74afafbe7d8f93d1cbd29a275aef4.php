<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('banner'); ?>
    
    <?php echo $__env->make('layouts.banner', [
    'title' => $banner_title,
    'banner_subtitle' => $banner_subtitle,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('session_one'); ?>
    <?php echo $__env->make('layouts.sessions.one', [
    'title' => $session_1_title,
    'subtitle' => $session_1_subtitle,
    'text' => $session_1_text
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('session_two'); ?>
    <?php echo $__env->make('layouts.sessions.two', [
    'title' => $session_2_title,
    'subtitle' => $session_2_subtitle,
    'cards' => [
    [
    'url' => $session_2_image_1_url,
    'text' => $session_2_image_1_text,
    ],
    [
    'url' => $session_2_image_2_url,
    'text' => $session_2_image_2_text
    ]
    ],
    'buttons' => [
    [
    'text' => $session_2_buttom_left_text,
    'url' => $session_2_buttom_left_url,
    'special' => true
    ],
    [
    'text' => $session_2_buttom_right_text,
    'url' => $session_2_buttom_right_url,
    'special' => false
    ]]
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('session_three'); ?>
    <?php echo $__env->make('layouts.sessions.three', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('session_four'); ?>
    <?php echo $__env->make('layouts.sessions.four', [
    'title' => $session_4_title,
    'subtitle' => $session_4_subtitle,
    'button_text' => $session_4_button_text,
    'button_url' => $session_4_button_url
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gui/Desktop/authorize-slim-4-9cd9a78e38675bd8175df9376854132f9aee75b4/resources/views/user/home.blade.php ENDPATH**/ ?>