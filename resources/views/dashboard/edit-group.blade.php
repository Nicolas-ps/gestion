@extends('top')
@section('content')

<div class="py-12">
    <div class="flex flex-col justify-center items-center bg-white shadow rounded-lg p-6">
        <form method="post" action="{{ route('group-update', ['id' => $group->id]) }}" class="w-1/2 grid lg:grid-rows-2 gap-6">
            @csrf
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Editar grupo</h1>

            <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                    <p>
                        <label for="name" class="bg-white text-gray-600 px-1">Nome do grupo *</label>
                    </p>
                </div>
                <p>
                    <input id="name" name="name" value="{{ $group->name }}" autocomplete="false" tabindex="0" type="text" class="border-none focus:outline-none py-1 px-1 text-gray-900 outline-none block h-full w-full">
                </p>
            </div>

            <div class="border focus-within:border-blue-500 focus-within:text-blue-500 transition-all duration-500 relative rounded p-1">
                <div class="-mt-4 absolute tracking-wider px-1 uppercase text-xs">
                    <p>
                        <label for="descricao" class="bg-white text-gray-600 px-1">Descrição *</label>
                    </p>
                </div>

                <p>
                    <textarea name="descricao" tabindex="0" class="border-none focus:outline-none py-1 px-1 outline-none block h-full w-full resize-none">
                            {{ $group->descricao }}
                    </textarea>
                </p>
            </div>

            <div class="border-t mt-6 pt-3">
                <button class="rounded text-gray-100 px-3 py-1 bg-blue-500 hover:shadow-inner hover:bg-blue-700 transition-all duration-300">
                    Salvar
                </button>
            </div>
        </form>

    </div>

    <div class="max-w-7xl w-100 mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 p-6 bg-gray-300 border-b border-gray-200">
            <span>
                <a href="{{ url()->previous() }}">
                    <- Back</a>
            </span>
        </div>
    </div>
    @endsection