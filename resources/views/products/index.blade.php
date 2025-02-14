<h1>Product List</h1>

<a href="{{ route('products.create') }}">Add New Product</a>

@if ($products->isEmpty())
    <p>No products available.</p>
@else
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Created At</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->created_at }}</td>
            </tr>
        @endforeach
    </table>
@endif
