<?php $__env->startSection('content'); ?>
    <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
        <div class="hero-content text-center my-10">
            <div class="max-w-md mb-10">
                <h2>Welcome to the Tasklist</h2>
                
                <a class="btn btn-primary btn-lg normal-case" href="<?php echo e(route('register')); ?>">Sign up now!</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/dashboard.blade.php ENDPATH**/ ?>