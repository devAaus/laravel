<x-layout>
   <h2>All Ninjas</h2>

   <ul>
      @foreach($ninjas as $ninja)
         <li>
            <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="true">
               <h3>{{ $ninja->name }}</h3>
            </x-card>
         </li>
      @endforeach
   </ul>

   {{ $ninjas->links() }}
</x-layout>