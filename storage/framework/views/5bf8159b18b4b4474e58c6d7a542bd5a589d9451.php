<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <!-- <?php for($i = 0; $i < 5; $i++): ?>
          <p>the value of i is <?php echo e($i); ?></p>
        <?php endfor; ?> -->

        <!-- <?php for($i = 0; $i < count($pizzas); $i++): ?>
          <p><?php echo e($pizzas[$i]['type']); ?></p>
        <?php endfor; ?> -->

        <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <?php echo e($loop->index); ?> - <?php echo e($pizza->name); ?> - <?php echo e($pizza->type); ?> - <?php echo e($pizza->base); ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\graceMan\Documents\laravel\noirDev\resources\views/pizzas.blade.php ENDPATH**/ ?>