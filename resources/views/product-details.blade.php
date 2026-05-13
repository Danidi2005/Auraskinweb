@extends('layouts.app')

@section('title', $product->name . ' - AuraSkin')

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="mb-6">
        <a href="{{ url()->previous() }}" class="inline-flex items-center text-gray-500 hover:text-orange-500 font-semibold transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back
        </a>
    </div>

    <div class="flex flex-col md:flex-row gap-12 items-start">
        
        <div class="md:w-1/2 bg-white p-4 rounded-3xl shadow-sm border border-gray-100 h-[500px] flex items-center justify-center">
            <img src="{{ file_exists(public_path('storage/products/' . $product->image)) ? asset('storage/products/' . $product->image) : asset('assets/images/' . $product->image) }}" 
                 class="w-full h-full object-contain rounded-2xl shadow-inner" 
                 alt="{{ $product->name }}">
        </div>

        <div class="md:w-1/2">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-2">{{ $product->name }}</h1>
            <p class="text-3xl font-bold text-[#AB6A2C] mb-6">Rs. {{ number_format($product->price, 2) }}</p>
            
            <div class="border-t border-b py-6 mb-8">
                <h3 class="text-lg font-bold text-gray-800 mb-2 uppercase">Product Description</h3>
                <p class="text-gray-600 leading-relaxed">
                    {{ $product->description ?? 'Experience premium care with our ' . $product->name . '. Formulated for the best results for your skin.' }}
                </p>
            </div>

            <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
                <p class="text-sm font-semibold text-gray-500 mb-4">Select Quantity & Add to Cart</p>
                @livewire('add-to-cart-button', ['productId' => $product->id], key($product->id))
            </div>
        </div>
    </div>
</div>
@endsection