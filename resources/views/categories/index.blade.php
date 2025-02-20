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
@include('header')
<h1>Категории</h1>
<a href="{{route('products.index')}}">Перейти к списку товаров</a>
@auth
<a href="{{route('categories.create')}}"><button>Добавить новую категорию</button></a>
@endauth
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Наименование</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td><a href="{{route('categories.show', $category->id)}}">Подробнее</a></td>
        @auth
            <td><a href="{{route('categories.edit', $category->id)}}">Редактировать</a></td>
            <td><form action="{{route('categories.destroy', $category->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить">
                </form>
            </td>
            @endauth
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
