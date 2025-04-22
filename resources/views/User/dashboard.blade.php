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

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($products as $product)
                <div class="relative flex flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                    <a href="#" class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl">
                        <img 
                            class="object-cover w-full h-full" 
                            src="{{ asset('storage/' . $product->image) }}" 
                            alt="{{ $product->name }}" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">{{ $product->name }}</h5>
                        </a>
                        <p class="text-sm text-slate-600 mt-2">
                            <span class="text-3xl font-bold text-slate-900">${{ number_format($product->price, 2) }}</span>
                        </p>
                        <p class="text-sm text-blue-600 mt-2">Quantity: {{ $product->quantity }}</p>
                        <a href="#" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 mt-3">
                            Buy Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        


@endsection