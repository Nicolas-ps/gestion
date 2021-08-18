@extends('top')
@section('content')

<div class="flex flex-col justify-center items-center max-w-7xl mx-auto sm:px-6 lg:px-8">

    @if(session('status-update'))
    <div class="w-1/2 mt-3 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="mt-3 bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <span class="text-grenn-1000">
                    {{ session('status-update') }}
                </span>
            </div>
        </div>
    </div>
    @endif

    <div class="w-1/2 mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex justify-between p-6 bg-white border-gray-200">
            <h1 class="font-semibold text-xl leading-tight">
                {{ $client->name}}
            </h1>
            <div>
                <a href="{{ route('client-edit', ['id' => $client->id]) }}">
                    <i class="far fa-edit"></i>
                </a>
                <a href="{{ route('client-delete', ['id' => $client->id]) }}" class="ml-3">
                    <i class="far fa-trash-alt"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="w-1/2 mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-gray-200">
                <h1 class="font-semibold text-md leading-tight">{{ $client->nacionalidade }} de {{ $client->cidade }} - {{ $client->uf}}.</h1>
            </div>
            <div class="p-6 bg-white border-gray-200">
                <h1 class="font-semibold text-md leading-tight">Nascido em {{ $client->data_nascimento }}</h1>
            </div>
            <div class="p-6 bg-white border-gray-200">
                <h1 class="font-semibold text-md leading-tight">Telefone para contato: {{ $client->telefone }}</h1>
            </div>
        </div>
    </div>

    <div class="w-1/2 mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-gray-200">
                <h1 class="font-semibold text-xl leading-tight">Participa do grupo</h1>
                @if( $group )
                <div class="p-6 px-0 bg-white border-gray-200">
                    <a class="underline" href="{{ route('group-showing', ['id' => $group->id]) }}">{{ $group->name }}</a>
                </div>
                @else
                <div class="p-6 px-0 bg-white border-gray-200">
                    <span>O usuário ainda não participa de nenhum grupo!</span>
                </div>
                @endif
            </div>
        </div>
    </div>


    <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 p-6 bg-white border-b border-gray-200">
            <span>
                <a href="{{ url()->previous() }}">
                    <- Back</a>
            </span>
        </div>
    </div>
    @endsection