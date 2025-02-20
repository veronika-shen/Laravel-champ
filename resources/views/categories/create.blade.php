<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление новой категории</title>
</head>
<body>
<form action="{{route('categories.store')}}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Имя категории">
    <input type="submit" value="Добавить новую категорию">
</form>
</body>
</html>
