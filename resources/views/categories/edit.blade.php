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
<form action="{{route('categories.update', $category->id)}}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="name" id="name" value="{{ $category?->name }}">
    <input type="submit" value="Редактировать">
</form>
</body>
</html>
