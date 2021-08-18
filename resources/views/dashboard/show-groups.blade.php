@extends('top')
@section('content')

<div class="py-12">

    @if(session('status-store'))
    <div class="max-w-7xl w-100 mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 p-6 bg-green-500 border-b border-gray-200 sm:rounded-lg">
            <span class="text-green-100">
                {{ session('status-store') }}
            </span>
        </div>
    </div>
    @endif

    @if(session('status-delete'))
    <div class="max-w-7xl w-100 mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 p-6 bg-green-500 border-b border-gray-200 sm:rounded-lg">
            <span class="text-green-100">
                {{ session('status-delete') }}
            </span>
        </div>
    </div>
    @endif


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @foreach($groups as $group)
                <div class="p-6 bg-white border-gray-200">
                    <span>
                        <a href="{{ route('group-showing', ['id' => $group['id']]) }}">{{ $group['name'] }}</a>
                    </span>
                </div> 
            @endforeach
        </div>
    </div>

    <div class="max-w-7xl w-100 mx-auto sm:px-6 lg:px-8">
        <div class="mt-3 p-6 bg-gray-300 border-b border-gray-200 sm:rounded-lg">
            <span>
                <a href="{{ url()->previous() }}">
                    <- Back</a>
            </span>
        </div>
    </div>

</div>
@endsection