<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blogs | Home</title>
</head>
<body>
   <h2>All Ninjas</h2>
   @if($greeting == "hello")
      <p>hello ninjas</p>
   @endif

   <ul>
      @foreach($ninjas as $ninja)
         <li>
            <h2>{{$ninja['name']}}</h2>
            <a href="/ninjas/{{$ninja['id']}}">View Details</a>
         </li>
      @endforeach
   </ul>
</body>
</html>