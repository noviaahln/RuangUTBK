@extends('components.template')
@section('title', 'Landing page')
@section('content')
    <nav class="bg-purple-400 w-full h-16 flex justify-start items-center">
        <img src="/img/logo.png" alt="logo ruang-utbk" class="w-40 h-auto px-3">
    </nav>
    <div class="bg-purple-400 h-screen w-full flex justify-center items-center">
        <div class="text-5xl font-bold text-black text-center">
            <h1 class="my-2">
                Siap Raih Skor
            </h1>
            <h1 class="my-2">
                Tinggi di UTBK?
            </h1>
            <div class="text-2xl font-normal text-black text-center my-5">
                <p>Mulai Belajarmu Sekarang!</p>
            </div>
            <div class="flex justify-center items-center text-2xl font-bold">
                <button class="bg-purple-700 hover:bg-purple-800 text-lg text-white font-bold py-2 px-4 rounded-full">
                    <a href="/register">
                        Get Started
                    </a>
                </button>
            </div> 
        </div>
    </div>
@endsection
