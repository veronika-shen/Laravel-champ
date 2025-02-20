<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование записи о товаре</title>
</head>
<body>
<form action="<?php echo e(route('products.update', $product->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
    <input type="text" name="name" id="name" value="<?php echo e($product->name); ?>">
    <input type="number" name="price" id="price" value="<?php echo e($product->price); ?>">
    <select name="category_id" id="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <input type="submit" value="Редактировать">
</form>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/products/edit.blade.php ENDPATH**/ ?>