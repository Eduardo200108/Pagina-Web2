@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-orange-200 h-full w-full p-0 m-0">
    @foreach ($recordatorios as $item)
 <div class="m-5 w-2/12">
    

    <h1 class="bg-lime-300">{{$item->id}}</h1>
    <h1 class="bg-lime-300">{{$item->importancia}}</h1>
    <h1 class="bg-teal-500">{{$item->recordar}}</h1>
    <h1 class="bg-teal-500">{{$item->created_at}}</h1>
</div>
    
      
    
    

@endforeach
</div>
