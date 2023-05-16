<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear nota') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="bg-red-500 w-96 p-4 mt-2 mb-4 mx-auto text-white  text-center">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <form action="{{ url('notas') }}" method="post"
                class="w-3/4 m-8 mx-auto text-center text-white bg-pink-500 ">
                {!! csrf_field() !!}
                <div class="text-center">
                    <label for="tema" class="p-5">Tema:</label>
                    <select name="tema" id="tema" class="text-black">
                        <option value="0">Tema</option>
                        @foreach ($temas as $tema)
                            <option value="{{ $tema->id }}" @if (old('tema') == $tema->id) selected @endif>
                                {{ $tema->tema }}</option>
                        @endforeach
                    </select>
                    <label for="tema" class="p-5">Titulo:</label>
                    <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}"
                        class="text-center w-96 m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">
                    <br>
                    <div class="grid grid-cols-2">
                        <div class="text-rigth pr-20">
                            <label for="contenido" class="">Contenido:</label>
                        </div>
                        <div class="text-left pl-5">
                            <label for="p_clave">Palabras clave:</label>
                        </div>
                    </div>

                    <textarea type="text" name="contenido" id="contenido"
                        class="text-center w-96 h-52  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ old('contenido') }}</textarea>
                    <textarea type="text" name="p_clave" id="p_clave"
                        class="text-center w-96 h-52  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ old('p_clave') }}</textarea><br>
                    <label for="resumen">Resumen:</label><br>
                    <textarea type="text" name="resumen" id="resumen"
                        class="text-center w-2/4 h-52  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ old('resumen') }}</textarea>

                </div>
                <input type="submit" value="Guardar"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 ">
            </form>

        </div>
    </div>
</x-app-layout>
