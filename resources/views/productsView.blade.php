<html>

<head>
    <title>View Products</title>
</head>

<body>
<table border = 1>
    <tr>
        <th>ID</th>
        <th>Vendor</th>
        <th>Product Type</th>
        <th>Creative</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->vendorId }}</td>
            <td>{{ $product->productTypeId }}</td>
            <td>{{ $product->creativeId }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>