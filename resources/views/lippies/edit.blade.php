<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Lip Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Update Lip Product</h1>
    <form action="{{ route('lippies.update', $lippy->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        @method('PUT')

        <label for="brand">Brand</label>
        <input type="text" id="brand" name="brand" value="{{ $lippy->brand }}" required>
        <br>
        <label for="type">Type</label>
        <input type="text" id="type" name="type" value="{{ $lippy->type }}" required>
        <br>
        <label for="shade">Shade</label>
        <input type="text" id="shade" name="shade" value="{{ $lippy->shade }}" required>
        <br>
        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="{{ $lippy->price }}" required>
        <br>
        <label for="img">Current Image</label><br>
        @if ($lippy->img)
            <img src="{{ asset('/storage/' . $lippy->img) }}" alt="{{ $lippy->brand }}">
        @else
            No Image
        @endif
        <br><br>
        <label for="new_img">New Image (optional)</label>
        <input type="file" id="new_img" name="new_img" accept="image/jpeg,image/png,image/gif,image/webp,image/bmp">
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
