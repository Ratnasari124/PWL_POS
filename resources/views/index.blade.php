<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Transactions</title>
</head>
<body>
    <h1>Sales Transactions</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale['id'] }}</td>
                <td>{{ $sale['product'] }}</td>
                <td>{{ $sale['quantity'] }}</td>
                <td>{{ $sale['total'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
