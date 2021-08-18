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

    @if(session('status-add'))
    <div class="w-1/2 mt-3 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="mt-3 bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <span class="text-grenn-1000">
                    {{ session('status-add') }}
                </span>
            </div>
        </div>
    </div>
    @endif

    <div class="w-1/2 mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="flex justify-between p-6 bg-white border-gray-200">
            <span class="font-semibold text-md leading-tight">
                {{ $group->name }}
            </span>
            <div>
                <a href="{{ route('add-participant', ['id' => $group->id]) }}">
                    <i class="mr-3 fas fa-user-plus"></i>
                </a>

                <a href="{{ route('group-edit', ['id' => $group->id]) }}">
                    <i class="far fa-edit"></i>
                </a>
                <a href="{{ route('group-delete', ['id' => $group->id]) }}" class="ml-3">
                    <i class="far fa-trash-alt"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="w-1/2 mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-gray-200">
                <span class="font-semibold text-md leading-tight">
                    {{ $group->descricao }}
                </span>
            </div>
        </div>
    </div>

    <div class="w-1/2 mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-gray-200">
                <h1 class="font-semibold text-md leading-tight">Participam do grupo</h1>
                @if($group_integrants)
                @foreach($group_integrants as $group_integrant)
                <div class="py-2 bg-white border-gray-200">
                    <span class="">
                        <a class="underline" href="{{ route('client-showing', ['id' => $group_integrant->id]) }}">{{ $group_integrant->name }}</a>
                        <a href="{{ route('delete-participant', ['id' => $group->id ,'id_participant' => $group_integrant->id]) }}""><i class="ml-2 fas fa-user-minus"></i></a>
                    </span>
                </div>
                @endforeach
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