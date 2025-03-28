<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Login</h2>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\siakad_sd\resources\views/auth/login.blade.php ENDPATH**/ ?>