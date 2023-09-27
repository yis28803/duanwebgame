<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center Image</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .center-image {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <img class="center-image" src="{{ asset('img/maxresdefault.jpg') }}" alt="Centered Image">
</body>
</html>

