<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lip List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        a {
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        img {
            width: 100px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Lip List</h1>
    <a href="{{ route('lippies.create') }}">Add New Lip Product</a>
    <table>
        <tr>
            <th>Brand</th>
            <th>Type</th>
            <th>Shade</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        @foreach($lippies as $lippy)
        <tr>
            <td>{{ $lippy->brand }}</td>
            <td>{{ $lippy->type }}</td>
            <td>{{ $lippy->shade }}</td>
            <td>{{ $lippy->price }}</td>
            <td>
                @if($lippy->img)
                    <img src="{{ asset('/storage/' . $lippy->img) }}" alt="{{ $lippy->brand }}">
                @else
                    No Image
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
