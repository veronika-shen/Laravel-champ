<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1><?php echo e($product->name); ?></h1>
<h2>Цена:<?php echo e($product->price); ?></h2>
<h2>Категория:<?php echo e($product->category->name); ?></h2>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/products/show.blade.php ENDPATH**/ ?>