<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование категории</title>
</head>
<body>
<form action="<?php echo e(route('categories.update', $category->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>

    <input type="text" name="name" id="name" value="<?php echo e($category->name); ?>">
    <input type="submit" value="Редактировать">
</form>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/categories/edit.blade.php ENDPATH**/ ?>