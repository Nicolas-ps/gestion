<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }} - Clientes
            </h2>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('logout') }}">Logout</a>
            </h1>
        </div>
    </x-slot>

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
                    <a href="{{ route('clients-create') }}"><i class="mr-3 fas fa-user-plus"></i>Cadastrar Cliente</a>

                </div>

                <div class="p-6 bg-gray border-gray-200">
                    <a href="{{ route('clients-showing') }}"><i class="mr-3 fas fa-list"></i>Ver todos clientes</a>
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
</x-app-layout>