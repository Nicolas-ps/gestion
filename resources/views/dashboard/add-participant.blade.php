@extends('top')
@section('content')
<div class="flex flex-row justify-center items-center">
    <div class="w-1/2 mt-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-gray-200">
                <h1 class="mb-3 font-semibold text-xl leading-tight">A serem adicionados: </h1>
                @foreach($clients as $client)
                    <span class="mt-6">
                        <a class="underline" href="{{ route('client-showing', ['id' => $client['id']]) }}">{{ $client->name }}</a>
                        <a href="{{ route('store-participant', ['id' => $idGroup, 'id_participant' => $client['id']]) }}"><i class="ml-2 fas fa-plus-square"></i></a>
                    </span>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection