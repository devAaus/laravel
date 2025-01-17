<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
</head>
<body>
    <h1>Welcome to the new laravel</h1>
    <p>Click button to view list of ninjas</p>

    <a href="/ninjas" class="btn">
        Find Ninjas
    </a>
</body>
</html>