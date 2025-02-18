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
<h1>Список товаров</h1>
<a href="{{ route('categories.index') }}">Перейти к списку категорий</a>
<br>
<a href="{{route('products.create')}}"><button>Добавить новый товар</button></a>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th>Категория</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->name }}</td>
            <td><a href="{{route('products.edit', $product->id)}}">Редактировать</a></td>
            <td><a href="{{route('products.show', $product->id)}}">Подробнее</a></td>
            <td><form action="{{route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Удалить">
                </form></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
