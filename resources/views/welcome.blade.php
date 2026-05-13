@extends('layouts.app')

@section('title', 'AuraSkin - Premium Skincare')

@section('content')

<section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('assets/images/woman-skin.jpg') }}');">
    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to AuraSkin</h1>
            <p class="text-lg md:text-2xl mb-6">Premium Skincare Products Made for Sri Lanka</p>
        </div>
    </div>
</section>

<section id="about" class="py-16 bg-white">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-10 px-6">
        <div class="flex-1 order-1 md:order-2 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">About Us</h2>
            <p class="text-lg leading-relaxed text-gray-700">
                AuraSkin crafts gentle, effective skincare made with care.<br>
                We’re obsessed with safe formulas, honest ingredients,<br>
                and results that help your skin glow—every day.
            </p>
        </div>
        <div class="flex-1 order-2 md:order-1">
            <img src="{{ asset('assets/images/aboutus.jpg') }}" alt="About Us" class="w-full rounded-xl shadow-lg">
        </div>
    </div>
</section>

<section id="contact" class="py-16 bg-gray-50">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-10 px-6">
        <div class="flex-1 order-1 md:order-2 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Contact Us</h2>
            <p class="text-lg leading-relaxed text-gray-700">
                Email: <strong>support@auraskin.com</strong><br>
                Phone: <strong>+94 71 234 5678</strong><br>
                We’re here to help with orders, products, and skincare tips.
            </p>
        </div>
        <div class="flex-1 order-2 md:order-1">
            <img src="{{ asset('assets/images/contact.jpg') }}" alt="Contact" class="w-full rounded-xl shadow-lg">
        </div>
    </div>
</section>

@endsection