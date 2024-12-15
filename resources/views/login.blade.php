@extends('components.template')
@section('title', 'Login')
@section('content')
    <div class="bg-purple-400 flex h-screen w-full">
        <!-- Bagian Kiri: Gambar -->
        <div class="w-1/2 flex justify-start items-center">
            <img src="/img/Asset1.png" alt="Asset" class="w-90 h-90 object-cover">
        </div>

        <!-- Bagian Kanan: Kotak Registrasi -->
        <div class="w-1/2 flex justify-center items-center">
            <div class="p-8 border rounded shadow-md w-3/4 bg-purple-200">
                <h2 class="text-2xl font-bold mb-4 text-center text-purple-700">LOGIN</h2>
                <form>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email/No telp</label>
                        <input type="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                    </div>
                    <div>
                        <a href="/homepage">
                            <button type="submit" class="w-full bg-purple-700 text-white py-2 rounded-md">Login</button>
                        </a>
                    </div>
                    <div>
                        <p class="text-center mt-4">Belum punya akun? <a href="/register" class="text-blue-500">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection