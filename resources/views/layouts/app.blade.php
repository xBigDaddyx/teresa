<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-cloak x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
    x-bind:class="{ 'dark': darkMode }" data-theme="beverly">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @wireUiScripts

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased ">

    <div class="flex flex-col min-h-screen bg-base-main dark:bg-base-background md:pl-64">

        <header class="flex items-center h-20 md:h-auto" x-data="{ open: false }">
            <nav class="relative flex items-center w-full px-4">
                <!-- Mobile Header -->
                <div class="inline-flex items-center justify-center w-full md:hidden">
                    <a href="#" @click="open = true" @click.away="open = false" class="absolute left-0 pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-i-600" fill="currentColor"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </a>
                    <a href="#">

                        <img class="w-32 block dark:hidden" src="{{ asset('storage/images/logo/teresa_full_logo.png') }}">
                        <img class="w-32 hidden dark:block"
                            src="{{ asset('storage/images/logo/teresa_full_logo_dark.png') }}">


                    </a>
                </div>

                @include('beverly::layouts.sidebar')

            </nav>
        </header>

        <!-- Page Heading -->
        @include('beverly::layouts.navbar')

        <!-- Page Content -->

        <main class="h-screen flex-1 bg-cover bg-center items-center justify-center"
            style="background-image: url('https://teresa.test/storage/images/bg-01.png');">
            <x-toaster-hub />
            {{ $slot }}

        </main>
        {{-- @include('layouts.footer') --}}






    </div>


</body>

</html>
