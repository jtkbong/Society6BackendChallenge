<html>

<head>
    <title>View Orders</title>
</head>

<body>
<h2>Orders for {{ $vendor->name }}</h2>
<table border = 1>
    <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Items</th>
        <th>Status</th>
    </tr>
    @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->customerId }}</td>
            <td>{{ $order->orderItemIds }}</td>
            <td>{{ $order->status }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>