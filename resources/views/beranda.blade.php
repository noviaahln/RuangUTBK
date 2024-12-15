@extends('components.template')
@section('title', 'Beranda')
@section('content')
    <nav>
        <div class="bg-purple-700 flex items-center h-20 w-full px-4">
            <!-- Logo -->
            <img src="/img/logo.png" alt="logo ruang-utbk" class="w-15 h-10">

            <!-- Menu -->
            <div class="flex items-center space-x-4 ml-auto">
                <!-- Dropdown Pilihan Subtes -->
                <div class="relative group">
                    <button class="text-white px-4 py-2 flex items-center">
                        Pilihan Subtes
                        <svg xmlns="http://www.w3.org/2000/svg" fill="fill-current" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform translate-y-2 transition-all duration-200 ease-in-out">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Penalaran Umum</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Pemahaman Bacaan Dan Menulis</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Pengetahuan Kuantitatif</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Pengetahuan dan Pemahaman Umum</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Literasi Bahasa Indonesia</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Literasi Bahasa Inggris</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">Penalaran Matematika</a>
                    </div>
                </div>

                <!-- Video Materi -->
                <a href="/VideoMateri">
                    <button class="text-white px-4 py-2 flex items-center">
                        Video Materi
                    </button>
                </a>
                <!-- Live Teaching -->
                <a href="/LiveTeaching">
                    <button class="text-white px-4 py-2 flex items-center">
                        Live Teaching
                    </button>
                </a>
                <!-- User Icon -->
                <a href="/profil">
                    <button class="text-white px-4 py-2 flex items-center ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </nav>
    <div class="bg-purple-400 h-screen w-full flex justify-center items-center">
        <h1></h1>
    </div>
@endsection