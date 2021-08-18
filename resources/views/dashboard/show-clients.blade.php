@extends('top')
@section('content')
<div class="py-12">

    @if(session('status-store'))
    <div class="max-w-7xl p-4 mb-3 bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
        <span class=" font-semibold text-xl text-green-100 leading-tight">{{ session('status-store') }}</span>
    </div>
    @endif

    @if(session('status-delete'))
    <div class="max-w-7xl p-4 mb-3 bg-green-500 overflow-hidden shadow-sm sm:rounded-lg">
        <span class=" font-semibold text-xl text-green-100 leading-tight">{{ session('status-delete') }}</span>
    </div>
    @endif

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @foreach($clients as $client)
            <div class="p-6 bg-white border-gray-200">
                <span>
                    <a class="underline" href="{{ route('client-showing', ['id' => $client['id']]) }}">{{ $client['name'] }}</a>
                </span>
            </div>
            @endforeach
        </div>
    </div>

    <div class="max-w-7xl w-100 mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 p-6 bg-gray-300 border-b border-gray-200">
            <span>
                <a href="{{ url()->previous() }}">
                    <- Back</a>
            </span>
        </div>
    </div>

</div>
@endsection