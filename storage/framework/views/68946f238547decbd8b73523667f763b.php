
<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">Tasklists</a></h1>
        </div>

        <div class="flex-none">
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <ul tabindex="0" class="menu hidden lg:menu-horizontal">
                    <?php echo $__env->make('commons.link_items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
                <div class="dropdown dropdown-end">
                    <button type="button" tabindex="0" class="btn btn-ghost normal-case font-normal lg:hidden">
                        <?php if(Auth::check()): ?>
                            <?php echo e(Auth::user()->name); ?>

                        <?php else: ?>
                            Guest
                        <?php endif; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                        <?php echo $__env->make('commons.link_items', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </ul>
                </div>
            </form>
        </div>
    </nav>
</header><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/commons/navbar.blade.php ENDPATH**/ ?>