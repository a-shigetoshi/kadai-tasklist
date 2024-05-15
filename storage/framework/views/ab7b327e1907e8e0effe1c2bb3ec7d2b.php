<?php $__env->startSection('content'); ?>

    <div class="prose ml-4">
        <h2>id = <?php echo e($task->id); ?> のタスク詳細ページ</h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td><?php echo e($task->id); ?></td>
        </tr>
        
        <tr>
            <th>ステータス</th>
            <td><?php echo e($task->status); ?></td>
        </tr>

        <tr>
            <th>メッセージ</th>
            <td><?php echo e($task->content); ?></td>
        </tr>
    </table>
    <a class="btn btn-outline" href="<?php echo e(route('tasks.edit', $task->id)); ?>">このタスクを編集</a>
    <form method="POST" action="<?php echo e(route('tasks.destroy', $task->id)); ?>" class="my-2">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        
        <button type="submit" class="btn btn-error btn-outline" 
            onclick="return confirm('id = <?php echo e($task->id); ?> のタスクを削除します。よろしいですか？')">削除</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/tasks/show.blade.php ENDPATH**/ ?>