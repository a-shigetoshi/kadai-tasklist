<?php $__env->startSection('content'); ?>

    <div class="prose ml-4">
        <h2 class="text-lg">タスク新規作成ページ</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="<?php echo e(route('tasks.store')); ?>" class="w-1/2">
            <?php echo csrf_field(); ?>
            
                <div class="form-control my-4">
                    <label for="status" class="label">
                        <span class="label-text">ステータス:</span>
                    </label>
                    <input type="text" name="status" class="input input-bordered w-full">
                </div>

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">タスク:</span>
                    </label>
                    <input type="text" name="content" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">登録</button>
        </form>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/tasks/create.blade.php ENDPATH**/ ?>