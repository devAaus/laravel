<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ninjas</title>
</head>
<body>
   <header>
      <nav>
         <h1>Ninjas</h1>
         <a href="/ninjas">All Ninjas</a>
         <a href="/ninjas/create">Create</a>
      </nav>
   </header>

   <main class="container">
      {{$slot}}
   </main>
</body>
</html>