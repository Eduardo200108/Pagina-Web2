<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear recordatorio') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="bg-red-500 w-96 p-4 mt-2 mb-4 mx-auto text-white  text-center">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <form action="{{ url('recordatorios') }}" method="post"
                class="w-3/4 m-8 mx-auto text-center text-white bg-pink-700">
                {!! csrf_field() !!}
                <div class="text-center">
                    <label for="tema" class="pl-5">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"
                        class="text-center w-60  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                        <label for="importancia">Importancia:</label>
                    <select name="importancia" id="importancia" class=" text-black">
                        <option value="muy importante" @if(old('importancia') == 'muy importante') selected @endif>Muy importante</option>
                        <option value="importante" @if(old('importancia') == 'importante') selected @endif>Importante</option>
                        <option value="No importante" @if(old('importancia') == 'No importante') selected @endif>No importante</option>
                    </select>
                    <label for="fecha" class="pl-5">Fecha y hora:</label>
                    <input type="datetime-local" name="fecha" id="fecha" value="{{ old('fecha') }}"
                        class="text-center  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                    <br>
                    <label for="contenido">Recordatorio:</label><br>
                    <textarea type="text" name="contenido" id="contenido"
                        class="text-center w-2/4 h-40  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ old('contenido') }}</textarea><br>
                </div>
                <input type="submit" value="Guardar"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 ">
            </form>

        </div>
    </div>
</x-app-layout>
