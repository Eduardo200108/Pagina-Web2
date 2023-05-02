@vite(['resources/css/app.css', 'resources/js/app.js'])
@foreach ($recordatorios as $item)
    <h1 class="bg-red-500">{{$item->recordar}}</h1>
@endforeach
