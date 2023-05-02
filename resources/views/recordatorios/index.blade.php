@vite(['resources/css/app.css', 'resources/js/app.js'])
@foreach ($recordatorios as $item)
    <h1 class="bg-blue-300">{{$item->id}}</h1>
    <h1 class="bg-blue-300">{{$item->importacia}}</h1>
    <h1 class="bg-blue-300">{{$item->recordar}}</h1>
    <h1 class="bg-blue-300">{{$item->Tema_id}}</h1>
    
    

@endforeach
