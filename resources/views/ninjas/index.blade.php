<x-layout>
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
</x-layout>