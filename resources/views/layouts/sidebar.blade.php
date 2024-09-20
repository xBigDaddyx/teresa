<!-- Sidebar Menu -->
<div :class="{ '!translate-x-0': open }" class="fixed top-0 left-0 z-20 w-9/12 h-screen overflow-y-auto transition duration-300 ease-in-out transform -translate-x-full bg-white dark:bg-secondary-800 shadow-2xl sm:w-64 md:translate-x-0">
    <!-- Sidebar Header -->
    <div class="flex items-center h-20">
        <div class="inline-flex items-center justify-center w-full md:justify-center">
            <!-- Hamburger -->
            <a href="#" @click="open = !open" class="absolute right-0 top-0 mr-1.5 mt-1.5 inline-flex p-1 items-center justify-center rounded-md hover:bg-blue-100 md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
            <!-- Logo -->
            <a href="#">
                <img class="w-32 block dark:hidden" src="{{ asset('storage/images/logo/teresa_full_logo.png') }}">
                <img class="w-32 hidden dark:block"
                    src="{{ asset('storage/images/logo/teresa_full_logo_dark.png') }}">
            </a>
        </div>
    </div>
    <!-- Profile Section -->
    <div class="divide-y divide-gray-100 divide-solid ">
        <div class="p-5 text-center">
            <!-- Profile Picture -->
            <a href="" class="inline-block w-auto rounded-full">
                <img src="{{ asset('storage/'.auth()->user()->avatar_url) }}" alt="" class="object-cover object-top w-32 h-32 align-top rounded-full">
            </a>
            <!-- Profile Info -->
            <div>
                <h3 class="mb-2 overflow-hidden text-2xl font-bold whitespace-nowrap overflow-ellipsis text-gray-800 dark:text-white">{{ auth()->user()->name }}</h3>
                <div>
                    <h5 class="overflow-hidden text-xs font-normal whitespace-nowrap overflow-ellipsis text-gray-600 dark:text-white">
                        {{auth()->user()->email}}
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Links -->
    <div class="flex flex-col mb-0 ml-0">
        <x-sidebar-nav-link :href="route('beverly.check.carton.release')" :active="request()->routeIs('beverly.check.carton.release')">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </x-slot>
            {{ __('Check Carton') }}
        </x-sidebar-nav-link>


        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-sidebar-nav-link onclick="event.preventDefault();this.closest('form').submit();">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </x-slot>
                {{ __('Sign Out') }}
            </x-sidebar-nav-link>
        </form>
    </div>
</div>
<div :class="{ '!inline': open }" class="z-10 fixed top-0 left-0 w-screen h-screen bg-gray-900 bg-opacity-30 hidden md:!hidden transition ease-in-out duration-300"></div>
