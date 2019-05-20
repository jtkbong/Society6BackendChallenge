<html>

<head>
    <title>View Creatives</title>
</head>

<body>
<table border = 1>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Link</th>
    </tr>
    @foreach ($creatives as $creative)
        <tr>
            <td>{{ $creative->id }}</td>
            <td>{{ $creative->name }}</td>
            <td>{{ $creative->description }}</td>
            <td>{{ $creative->link }}</td>
            <td><a href='delete/creative/{{ $creative->id }}'>Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>