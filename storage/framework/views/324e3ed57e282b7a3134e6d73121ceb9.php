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
<h1>Категории</h1>
<a href="<?php echo e(route('products.index')); ?>">Перейти к списку товаров</a>
<?php if(auth()->guard()->check()): ?>
<a href="<?php echo e(route('categories.create')); ?>"><button>Добавить новую категорию</button></a>
<?php endif; ?>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Наименование</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->name); ?></td>
            <td><a href="<?php echo e(route('categories.show', $category->id)); ?>">Подробнее</a></td>
        <?php if(auth()->guard()->check()): ?>
            <td><a href="<?php echo e(route('categories.edit', $category->id)); ?>">Редактировать</a></td>
            <td><form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="submit" value="Удалить">
                </form>
            </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/categories/index.blade.php ENDPATH**/ ?>