<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/main.css" rel="stylesheet">

</head>

<body>
    <div class="text-center">
        <p>This is laravel study lesson</p>

        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <?php echo e($loop->index); ?> - <?php echo e($food['type']); ?> - <?php echo e($food['base']); ?>

            <?php if($loop->first): ?>
            <span> - this is the first loop</span>
            <?php endif; ?>
            <?php if($loop->last): ?>
            <span> - this is the last loop</span>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</body>

</html><?php /**PATH C:\Users\graceMan\Documents\laravel\noirDev\resources\views/myWay.blade.php ENDPATH**/ ?>