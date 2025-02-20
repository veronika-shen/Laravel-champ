<header>
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('logout')); ?>">Выйти из аккаунта</a>
    <?php else: ?>
        <a href="<?php echo e(route('auth.login')); ?>">Войти</a>
        <a href="<?php echo e(route('auth.register')); ?>">Зарегистрироваться</a>
    <?php endif; ?>
</header>
<?php /**PATH /var/www/html/resources/views/header.blade.php ENDPATH**/ ?>