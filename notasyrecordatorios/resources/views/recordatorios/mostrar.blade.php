<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver recordatorio') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body w-3/4 m-8 mx-auto text-center text-white bg-pink-700 p-8">
            <div class="flex justify-center">
                <label for="tema" class="p-5">Titulo:</label>
                <p class="break-words w-60 p-5 border-2 bg-white text-black">
                    {{ $recordatorio->titulo }}</p>
                <label for="Importancia" class="p-5">Importancia:</label>
                <p class="break-words w-60 p-5 border-2 bg-white text-black">
                    {{ $recordatorio->importancia }}</p>
                <label for="resumen" class="p-5">Fecha:</label>
                <p class="break-words w-60 p-5 border-2 bg-white text-black">
                    {{ $recordatorio->fecha }}</p>
            </div><br>
            <label for="contenido" class="p-5">Contenido:</label><br><br>
                <p class="break-words w-1/2 p-5 border-2 mx-auto  bg-white text-black">
                    {{ $recordatorio->contenido }}</p>
        </div>
    </div>
</x-app-layout>
