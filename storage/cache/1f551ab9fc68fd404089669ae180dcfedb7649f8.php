<!-- Two -->
<section id="two" class="wrapper style2 special">
    <div class="container">
        <header class="major">
            <h2><?php echo e($title); ?></h2>
            <p><?php echo e($subtitle); ?></p>
        </header>
        <div class="row 150%">
            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="6u 12u$(xsmall)">
                    <div class="image fit captioned">
                        <img src="<?php echo e(asset($card["url"])); ?>" alt="" />
                        <h3><?php echo e($card["text"]); ?></h3>
                    </div>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <ul class="actions">
            <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e($button['url']); ?>" class="button big <?php echo e($button['special'] ? 'special' : ''); ?>"><?php echo e($button['text']); ?></a></li>   
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>
<?php /**PATH /home/gui/Desktop/authorize-slim-4-9cd9a78e38675bd8175df9376854132f9aee75b4/resources/views/layouts/sessions/two.blade.php ENDPATH**/ ?>