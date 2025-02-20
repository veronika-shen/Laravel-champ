<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление нового товара</title>
</head>
<body>
<form action="<?php echo e(route('products.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" id="name" placeholder="Наименование" required>
    <input type="number" name="price" id="price" placeholder="Цена" required>
    <select name="category_id" id="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <input type="submit" value="Добавить новый товар">
</form>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/products/create.blade.php ENDPATH**/ ?>