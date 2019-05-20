<html>

<head>
    <title>View Customers</title>
</head>

<body>
<table border = 1>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Country</th>
    </tr>
    @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->firstName }}</td>
            <td>{{ $customer->lastName }}</td>
            <td>{{ $customer->address1 }}</td>
            <td>{{ $customer->address2 }}</td>
            <td>{{ $customer->city }}</td>
            <td>{{ $customer->state }}</td>
            <td>{{ $customer->zip }}</td>
            <td>{{ $customer->country }}</td>
            <td><a href = 'delete/customer/{{ $customer->id }}'>Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>