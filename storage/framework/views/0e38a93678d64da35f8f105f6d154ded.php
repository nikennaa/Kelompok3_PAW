<?php $__env->startSection('title', 'Regist'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="form-container">

    
    <?php if(session('success')): ?>
        <div class="message">
            <span><?php echo e(session('success')); ?></span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
    <?php endif; ?>

    
    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="message">
                <span><?php echo e($error); ?></span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <form action="<?php echo e(route('regist')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <h3>register now</h3>

        <input type="text" name="name" class="box" placeholder="enter your username" required>
        <input type="email" name="email" class="box" placeholder="enter your email" required>
        <input type="password" name="pass" class="box" placeholder="enter your password" required>
        <input type="password" name="cpass" class="box" placeholder="confirm your password" required>

        <input type="submit" class="btn" name="submit" value="register now">

        <p>already have an account? <a href="<?php echo e(route('login')); ?>">login now</a></p>
    </form>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Niken\Documents\ER_Wedding\resources\views/regist.blade.php ENDPATH**/ ?>