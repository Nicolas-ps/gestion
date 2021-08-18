@extends('top')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div class="p-6 bg-white border-gray-200">
                <a href="{{ route('groups-create') }}"><i class="mr-3 fas fa-plus-square"></i>Criar grupo</a>
            </div>

            <div class="p-6 bg-gray border-gray-200">
                <a href="{{ route('groups-showing') }}"><i class="mr-3 fas fa-list"></i>Ver todos os grupos</a>
            </div>

        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 p-6 bg-white border-b border-gray-200">
            <span>
                <a href="{{ route('redirect-dashboard') }}">
                    <- Back</a>
            </span>
        </div>
    </div>
</div>
@endsection