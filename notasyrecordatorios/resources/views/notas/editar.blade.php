<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear nota') }}
        </h2>
    </x-slot>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="bg-blue-500 w-96 p-4 mt-2 mb-4 mx-auto text-white  text-center">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <form action="{{ url('notas/' . $nota->id) }}" method="post"
                class="w-3/4 m-8 mx-auto text-center text-white bg-Green-600 ">
                {!! csrf_field() !!}
                @method('PATCH')
                <div class="text-center">
                    <div class="p-5">
                        <h1 class=""><strong>Asignatura: </strong>{{ $asignatura->asignatura }}
                        </h1>
                        <h1 class=""><strong>Tema: </strong>{{ $tema->tema }}
                        </h1>
                    </div>
                    <div class="">
                        <label for="tema" class="pl-5">Titulo:</label>
                    </div>
                    <input type="text" name="titulo" id="titulo" value="{{ $nota->titulo }}"
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
                        class="text-center w-96 h-52  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ $nota->contenido }}</textarea>
                    <textarea type="text" name="p_clave" id="p_clave"
                        class="text-center w-96 h-52  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ $nota->p_clave }}</textarea><br>
                    <label for="resumen">Resumen:</label><br>
                    <textarea type="text" name="resumen" id="resumen"
                        class="text-center w-2/4 h-52  m-5 bg-white py-3 font-medium text-black outline-none focus:border-blue-500 focus:shadow-md">{{ $nota->resumen }}</textarea>


                </div>
                <input type="submit" value="Actualizar"
                    class="hover:cursor-pointer w-24 text-center uppercase my-4 mx-16 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 ">
            </form>

        </div>
    </div>
</x-app-layout>
