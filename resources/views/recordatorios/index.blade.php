@vite(['resources/css/app.css', 'resources/js/app.js'])
@foreach ($recordatorios as $item)
<div class="m-5 w-1/12">
    <h1 class="bg-blue-300">{{$item->id}}</h1>
    <h1 class="bg-blue-300">{{$item->importancia}}</h1>
    <h1 class="bg-blue-300">{{$item->recordar}}</h1>
    <h1 class="bg-blue-300">{{$item->created_at}}</h1>
</div>
    
    
    

@endforeach
