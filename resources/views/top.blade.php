<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
            </h2>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('logout') }}">Logout</a>
            </h1>
        </div>
    </x-slot>

    @yield('content')
</x-app-layout>