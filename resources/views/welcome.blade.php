<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Lip Store</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #ff69b4;
            font-size: 3em;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #fff;
            background-color: #ff69b4;
            padding: 15px 25px;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #ff1493;
        }
    </style>
</head>
<body>
    <h1>Welcome to Lip Store</h1>
    <a href="{{ route('lippies.index') }}">View Lip Products</a>
</body>
</html>
