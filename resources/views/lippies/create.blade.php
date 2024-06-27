<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        input[type="text"], input[type="file"] {
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
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Create New Lip Product</h1>
    <form action="{{ route('lippies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="brand">Brand</label>
        <input type="text" id="brand" name="brand" required>
        <br>
        <label for="type">Type</label>
        <input type="text" id="type" name="type" required>
        <br>
        <label for="shade">Shade</label>
        <input type="text" id="shade" name="shade" required>
        <br>
        <label for="price">Price</label>
        <input type="text" id="price" name="price" required>
        <br>
        <label for="img">Image</label>
        <input type="file" id="img" name="img" accept="image/jpeg,image/png,image/gif,image/webp,image/bmp" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
