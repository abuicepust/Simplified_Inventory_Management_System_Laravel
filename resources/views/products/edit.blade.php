<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit a existing product</h1>
    <div>
        @if($errors->any())
        <ul>
           @foreach($errors->all() as $error) 
            <li>{{$error}}</li>

            @endforeach

        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product'=>$product])}}">
        @csrf
        @method('put')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>

        <div>
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="quantity" value="{{$product->quantity}}">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>