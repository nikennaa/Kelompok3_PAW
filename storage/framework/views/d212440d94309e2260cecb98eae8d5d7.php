<?php $__env->startSection('title', 'Update Product'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin_style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="update-product">

    <form action="<?php echo e(route('products.update', $product->id_product)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <img src="<?php echo e(asset('storage/uploaded_img/' . $product->image)); ?>" class="image" alt="">

        <input type="hidden" value="<?php echo e($product->id_product); ?>" name="update_p_id">
        <input type="hidden" value="<?php echo e($product->image); ?>" name="update_p_image">

        <input type="text" class="box" value="<?php echo e($product->nama_produk); ?>" required placeholder="Update product name" name="nama_produk">
        <input type="number" min="0" class="box" value="<?php echo e($product->price); ?>" required placeholder="Update product price" name="price">
        <textarea name="detail" class="box" required placeholder="Update product details" cols="30" rows="10"><?php echo e($product->detail); ?></textarea>

        <input type="file" accept="image/jpg, image/jpeg, image/png" class="box" name="image">

        <!-- Flex container for the buttons -->
        <div class="button-group">
            <input type="submit" value="Update Product" class="btn">
            <a href="<?php echo e(route('products.index')); ?>" class="option-btn">Go Back</a>
        </div>
    </form>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Niken\Documents\ER_Wedding\resources\views/updateProduct.blade.php ENDPATH**/ ?>