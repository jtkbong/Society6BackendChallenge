<html>

<head>
    <title>View Product Types</title>
</head>

<body>
<table border = 1>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    @foreach ($productTypes as $productType)
        <tr>
            <td>{{ $productType->id }}</td>
            <td>{{ $productType->name }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>