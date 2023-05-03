@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-orange-200 h-full w-full p-0 m-0">
@foreach ($notas as $item)
<div class="m-5 w-2/12">

    <h2 class="bg-yellow-200">{{$item->titulo}}</h2>
    <h3 class="bg-yellow-200">{{$item->resumen}}</h3>
    <h3 class="bg-green-400">{{$item->apunte}}</h3>
    <h4 class="bg-green-400">{{$item->created_at}}</h4>
</div>
@endforeach
</div>