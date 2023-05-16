<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notas') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body pb-16">
                        <a href="{{ url('/notas/create') }}"
                            class="block w-24 text-center uppercase my-4 mx-16 shadow bg-green-800 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white text-xs py-3">
                            Nuevo
                        </a>
                        <div class="w-full flex flex-wrap p-16 mx-auto justify-center bg-gray-300">
                            @foreach ($notas as $nota)
                                <div
                                    class="max-w-sm bg-violet-700 overflow-hidden shadow-lg text-center mx-1 my-4 text-white">
                                    <div class="px-6 pt-4 border-b-2 w-64">
                                        <div class="font-bold text-xl mt-4">{{ $nota->titulo }}</div>
                                    </div>
                                    <div class="bg-violet-800 px-6 py-4 h-32 w-64">
                                        <p class="text-base">{{ substr($nota->contenido, 0, 50) }}...</p>
                                    </div>
                                    <div class="flex">
                                        <a href="{{ url('/notas/' . $nota->id) }}"
                                            class="px-6 py-4 border w-1/2 flex items-center justify-center hover:bg-violet-500 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </a>
                                        <a href="{{ url('/notas/' . $nota->id . '/edit') }}"
                                            class="px-6 py-4 border w-1/2 flex items-center justify-center hover:bg-violet-500 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                        <form method="POST" action="{{ url('/notas' . '/' . $nota->id) }}"
                                            accept-charset="UTF-8" style="display:inline"
                                            class="px-6 py-4 border w-1/2 flex items-center justify-center bg-red-700 hover:bg-red-500 cursor-pointer">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="inline-flex m-2" title="Delete nota"
                                                onclick="return confirm(&quot;¿estas seguro?&quot;)">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
