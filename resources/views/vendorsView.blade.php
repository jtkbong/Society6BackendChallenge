<html>

<head>
    <title>View Vendors</title>
</head>

<body>
<table border = 1>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    @foreach ($vendors as $vendor)
        <tr>
            <td>{{ $vendor->id }}</td>
            <td>{{ $vendor->name }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>