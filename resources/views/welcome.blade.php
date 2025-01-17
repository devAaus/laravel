<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel </title>

   @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
   <h1>Welcome to the new laravel app</h1>
   <p>Click button to view list of ninjas</p>

   <a href="/ninjas" class="btn mt-4 inline-block">
      Find Ninjas
   </a>
</body>
</html>