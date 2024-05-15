<?php $__env->startSection('content'); ?>

    <div class="prose mx-auto text-center">
        <h2>Log in</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="<?php echo e(route('login')); ?>" class="w-1/2">
            <?php echo csrf_field(); ?>

            <div class="form-control my-4">
                <label for="email" class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email" class="input input-bordered w-full">
            </div>

            <div class="form-control my-4">
                <label for="password" class="label">
                    <span class="label-text">Password</span>
                </label>
                <input type="password" name="password" class="input input-bordered w-full">
            </div>

            <button type="submit" class="btn btn-primary btn-block normal-case">Log in</button>

            
            <p class="mt-2">New user? <a class="link link-hover text-info" href="<?php echo e(route('register')); ?>">Sign up now!</a></p>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/auth/login.blade.php ENDPATH**/ ?>