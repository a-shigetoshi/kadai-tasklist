<?php if(Auth::check()): ?>
    
    <!--<li><a class="link link-hover" href="#">Users</a></li>-->
    
    <!--<li><a class="link link-hover" href="#"><?php echo e(Auth::user()->name); ?>&#39;s profile</a></li>-->
    <!--<li class="divider lg:hidden"></li>-->
    
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
<?php else: ?>
    
    <li><a class="link link-hover" href="<?php echo e(route('register')); ?>">Signup</a></li>
    <li class="divider lg:hidden"></li>
    
    <li><a class="link link-hover" href="<?php echo e(route('login')); ?>">Login</a></li>
<?php endif; ?><?php /**PATH /home/ec2-user/environment/tasklist/resources/views/commons/link_items.blade.php ENDPATH**/ ?>