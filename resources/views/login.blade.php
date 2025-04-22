@extends('layouts.masterlayout')

@section('content')
        {{-- Session Messages --}}
        @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif
    <div class="container mx-auto mt-10 p-6">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center mb-6">Login</h2>
            <form action="{{ route ('account.login.index') }}" method="POST" class="space-y-6">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" name="email" id="email" required 
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold">Password</label>
                    <input type="password" name="password" id="password" required 
                        class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300">
                </div>
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="text-indigo-600">
                        <label for="remember" class="ml-2 text-gray-700">Remember Me</label>
                    </div>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800 text-sm">Forgot Password?</a>
                </div>
                
            <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition duration-300">Login</button>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-700">Don't have an account? 
                    <a href=" {{ route('account.register') }}" class="text-indigo-600 hover:text-indigo-800">Register</a>
                </p>
            </div>
            </form>
        </div>
    </div>
@endsection