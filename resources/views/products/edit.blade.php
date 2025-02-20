<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование записи о товаре</title>
</head>
<body>
<form action="{{route('products.update', $product->id)}}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="name" id="name" value="{{$product->name}}">
    <input type="number" name="price" id="price" value="{{$product->price}}">
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Редактировать">
</form>
</body>
</html>
