@vite(['resources/css/app.css', 'resources/js/app.js'])
@foreach ($notas as $item)
    <h1 class="bg-blue-300">{{$item->id}}</h1>
    <h2 class="bg-blue-300">{{$item->titulo}}</h2>
    <h3 class="bg-blue-700">{{$item->resumen}}</h3>
    <h4 class="bg-blue-700">{{$item->p_clave}}</h4>
    <h3 class="bg-blue-700">{{$item->apunte}}</h3>
@endforeach
