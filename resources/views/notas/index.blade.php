@vite(['resources/css/app.css', 'resources/js/app.js'])
@foreach ($notas as $item)
    <h1>{{$item->titulo}}</h1>
    <h1>{{$item->resumen}}</h1>
@endforeach
