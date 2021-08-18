@extends('top');
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('permission'))
            <div class="p-4 mb-3 bg-red-500 overflow-hidden shadow-sm sm:rounded-lg">
                <span class=" font-semibold text-xl text-red-100 leading-tight">{{ session('permission') }}</span>
            </div>
        @endif
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h1 class="p-6 font-semibold text-xl text-blue-600 leading-tight">
                <a href="{{ route('groups') }}">Quadro de grupos</a>
            </h1>

            <h1 class="p-6 font-semibold text-xl text-blue-600 leading-tight">
                <a href="{{ route('clients') }}">Quadro de clientes</a>
            </h1>

        </div>

    </div>
</div>
@endsection