<?php $__env->startSection('content'); ?>
<div class="prose ml-4">
        <h2 class="text-lg">タスク 一覧</h2>
    </div>

    <?php if(isset($tasks)): ?>
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a class="link link-hover text-info" href="<?php echo e(route('tasks.show', $task->id)); ?>"><?php echo e($task->id); ?></a></td>
                    <td><?php echo e($task->status); ?></td>
                    <td><?php echo e($task->content); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
     <a class="btn btn-primary" href="<?php echo e(route('tasks.create')); ?>">新規タスクの登録</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/tasks/index.blade.php ENDPATH**/ ?>