<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Microposts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    </head>

    <body>

        
        <?php echo $__env->make('commons.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container mx-auto">
            
            <?php echo $__env->make('commons.error_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>

    </body>
</html><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/layouts/app.blade.php ENDPATH**/ ?>