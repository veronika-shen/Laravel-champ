<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Аавторизация</title>
</head>
<body>
<form action="{{ route('authenticate') }}" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="Email" required>
    <input type="password" name="password" id="password" placeholder="Пароль" required>
    <input type="submit" value="Авторизироваться">
</form>
</body>
</html>
