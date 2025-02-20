<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1>Список товаров</h1>
<form>
    <select name="category_id" id="category_id">
        <option value="" disabled selected>Выберите категорию</option>

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <input type="submit" value="Отфильтровать">
</form>
<a href="<?php echo e(route('categories.index')); ?>">Перейти к списку категорий</a>
<br>
<?php if(auth()->guard()->check()): ?>
<a href="<?php echo e(route('products.create')); ?>"><button>Добавить новый товар</button></a>
<?php endif; ?>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th>Категория</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->id); ?></td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td><?php echo e($product->category->name); ?></td>
            <td><a href="<?php echo e(route('products.show', $product->id)); ?>">Подробнее</a></td>
        <?php if(auth()->guard()->check()): ?>
            <td><a href="<?php echo e(route('products.edit', $product->id)); ?>">Редактировать</a></td>
            <td><form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="submit" value="Удалить">
                </form></td>
            <?php endif; ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</body>
</html>
<?php /**PATH /var/www/html/resources/views/products/index.blade.php ENDPATH**/ ?>