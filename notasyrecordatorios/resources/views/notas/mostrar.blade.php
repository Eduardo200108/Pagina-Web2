<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver nota') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body w-3/4 m-8 mx-auto text-center text-white bg-pink-500 p-8">
            <div class="text-center">
                <h1 class="pb-8">
                    <strong>Asignatura: </strong>{{ $asignatura->asignatura }}
                    <strong class="pl-5">Tema:</strong>{{ $tema->tema }}
                </h1>
                <div class="pb-5">
                    <label for="tema" class="pl-5">Titulo:</label>
                </div>
                <p class="break-words w-96 p-5 border-2 mx-auto  bg-white text-black">
                    {{ $nota->titulo }}</p>
                <div class="grid grid-cols-2 pt-12">
                    <div class="text-left pl-44">
                        <label for="contenido">Contenido:</label>
                    </div>
                    <div class="text-left pl-20">
                        <label for="p_clave">Palabras clave:</label>
                    </div>
                </div>
                <div class="grid grid-cols-2 pt-5 pl-44">
                    <div class="text-rigth">
                        <p class="break-words w-96 h-52 p-5 border-2  bg-white text-black">
                            {{ $nota->contenido }}</p>
                    </div>
                    <div class="text-left">
                        <p class="break-words w-96 h-52  p-5 border-2 bg-white text-black">
                            {{ $nota->p_clave }}</p>
                    </div>
                </div>
                <div class="pt-8">
                    <label for="resumen" class="">Resumen:</label>
                </div>
                <div class="pt-5">
                    <p class="break-words w-2/4 p-5 border-2 mx-auto  bg-white text-black">
                        {{ $nota->resumen }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
