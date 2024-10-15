<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        [x-cloak] { display: none !important; }
        .dropdown-menu { display: none; }
        .dropdown-menu.show { display: block; }

        .appoint-button {
        background-color: #3B82F6;
        color: white;
        border-radius: 0.375rem;
        text-align: center;
        display: inline-block;
        transition: background-color 0.3s;
        text-decoration: none;
    }

    .appoint-button:hover {
        background-color: #2563EB;
    }
    </style>


    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    <div class="fixed inset-0">
        <img src="{{ asset('images/bg.jpg') }}" class="opacity-5 w-full h-full object-cover" alt="Background Image">
    </div>

    <div class="relative z-10 bg-main border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <a href="/">
                            <img src="{{ asset('images/gclogo.png') }}" class="h-10" alt="Logo">
                        </a>
                    </div>
                    <div class="flex space-x-8">
                        <a href="/" class="text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="/appointments" class="text-white px-3 py-2 rounded-md text-sm font-medium">Appointment</a>
                        <a href="{{ route('patient.services') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium hover:text-gray-500">Services</a>
                    </div>
                </div>

                <div class="flex items-center relative">
                    <button onclick="toggleDropdown()" id="dropdownButton" class="flex items-center text-white">
                        <span class="ml-2">{{ auth()->user()->name ?? '' }}</span>
                    </button>

                    <div id="dropdownMenu" class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                Log out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col min-h-screen bg-gray-100 relative z-10">
        <div class="flex-1">
            <div class="relative flex-1 overflow-y-auto focus:outline-none">
                <main class="mx-auto max-w-7xl py-10">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>

    <script>

        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('show');
        }


        window.addEventListener('click', function(event) {
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownButton = document.getElementById('dropdownButton');
            if (!dropdownButton.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>

    @vite('resources/js/app.js')
</body>
</html>
