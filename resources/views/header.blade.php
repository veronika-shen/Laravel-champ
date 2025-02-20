<header>
    @auth
        <a href="{{ route('logout') }}">Выйти из аккаунта</a>
    @else
        <a href="{{ route('auth.login') }}">Войти</a>
        <a href="{{ route('auth.register') }}">Зарегистрироваться</a>
    @endauth
</header>
