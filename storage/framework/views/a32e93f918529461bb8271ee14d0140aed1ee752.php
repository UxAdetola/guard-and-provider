<?php $__env->startSection('content'); ?>
<div class="wrapper pizza-details">
    <h1>Order for <?php echo e($pizzass->name); ?> </h1>
    <p class="type">Type - <?php echo e($pizzass->type); ?></p>
    <p class="base">Base - <?php echo e($pizzass->base); ?></p>
    <ul>
        <?php $__currentLoopData = $pizzass->toppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($topping); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <form action="/pizzas/<?php echo e($pizzass->id); ?>" method="post">

        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>;

        <button>Complete ORder</button>
    </form>
</div>
<div>
    <a href="/pizzas">
        < - Back to all pizza</a>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\graceMan\Documents\laravel\noirDev\resources\views/pizzas/show.blade.php ENDPATH**/ ?>