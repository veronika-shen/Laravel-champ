<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<form action="<?php echo e(route('registerCreate')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Имя" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <input type="submit" value="Зарегистрироваться">
</form>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/auth/register.blade.php ENDPATH**/ ?>