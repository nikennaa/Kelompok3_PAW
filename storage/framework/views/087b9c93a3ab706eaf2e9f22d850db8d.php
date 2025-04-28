<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin_style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<section class="add-products">
    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <h3>Add New Product</h3>
        <input type="text" class="box" required placeholder="Enter product name" name="nama_produk">
        <input type="number" min="0" class="box" required placeholder="Enter product price" name="price">
        <textarea name="detail" class="box" required placeholder="Enter product details" cols="30" rows="10"></textarea>
        <input type="file" accept="image/jpg, image/jpeg, image/png" required class="box" name="image">
        <input type="submit" value="Add Product" class="btn">
    </form>
</section>

<section class="show-products">
    <div class="box-container">

        <?php if($products->count()): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box">
                    <div class="price">Rp<?php echo e($product->price); ?></div>
                    <img class="image" src="<?php echo e(asset('storage/uploaded_img/' . $product->image)); ?>" alt="<?php echo e($product->nama_produk); ?>">
                    <div class="name"><?php echo e($product->nama_produk); ?></div>
                    <div class="details"><?php echo e($product->detail); ?></div>
                    <a href="<?php echo e(route('products.edit', $product->id_product)); ?>" class="option-btn">Update</a>
                    <a href="<?php echo e(route('products.destroy', $product->id_product)); ?>" class="delete-btn" onclick="return confirm('Delete this product?');">Delete</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <p class="empty">No products added yet!</p>
        <?php endif; ?>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Niken\Documents\ER_Wedding\resources\views/product.blade.php ENDPATH**/ ?>