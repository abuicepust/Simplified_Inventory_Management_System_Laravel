<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1>Products</h1>
    <div>
       @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
       @endif
    </div>
    
    <div>
        <a href="{{route('product.create')}}">Create a New Product</a>
    </div><br>

    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                       <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                       </form> 
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>