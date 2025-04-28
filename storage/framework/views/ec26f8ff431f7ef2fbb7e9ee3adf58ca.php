<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="form-container">

    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h3>login now</h3>

        <input type="email" name="email" class="box" placeholder="enter your email" required>
        <input type="password" name="pass" class="box" placeholder="enter your password" required>

        <input type="submit" class="btn" name="submit" value="login now">

        <p>don't have an account? <a href="<?php echo e(url('/regist')); ?>">register now</a></p>

    </form>

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Niken\Documents\ER_Wedding\resources\views/login.blade.php ENDPATH**/ ?>