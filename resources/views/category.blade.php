@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-black mb-8 uppercase text-center tracking-widest">
        AuraSkin {{ ucfirst($type) }} Collection
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach($products as $product)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group hover:shadow-lg transition-shadow flex flex-col h-full">
                <a href="{{ route('product.details', $product->id) }}" class="block flex-1">
                    <div class="h-64 bg-gray-50 overflow-hidden w-full">
                        <img src="{{ file_exists(public_path('storage/products/' . $product->image)) ? asset('storage/products/' . $product->image) : asset('assets/images/' . $product->image) }}" 
                             class="w-full h-full object-contain group-hover:scale-105 transition-transform" 
                             alt="{{ $product->name }}">
                    </div>

                    <div class="p-6 pb-0">
                        <h2 class="text-xl font-bold text-gray-800">{{ $product->name }}</h2>
                        <p class="text-orange-600 font-bold text-lg mt-2">Rs. {{ number_format($product->price, 2) }}</p>
                    </div>
                </a>

                <div class="p-6 pt-4 mt-auto">
                    @livewire('add-to-cart-button', ['productId' => $product->id], key($product->id))
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection