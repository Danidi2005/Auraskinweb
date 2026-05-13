@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-16 text-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md mx-auto">
        {{-- Success Icon --}}
        <div class="text-green-500 mb-4">
            <svg class="w-20 h-20 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-2">Thank You!</h1>
        <p class="text-gray-600 mb-6">Your AuraSkin order has been placed successfully. We are preparing your glow!</p>

        <div class="flex flex-col gap-3">
            <a href="/user/orders" class="bg-[#333333] text-white py-3 rounded-md font-bold hover:bg-black transition">
                View My Orders
            </a>
            <a href="/" class="text-orange-600 font-medium hover:underline">
                Continue Shopping
            </a>
        </div>
    </div>
</div>
@endsection