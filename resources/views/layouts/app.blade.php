<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AuraSkin - @yield('title', 'Premium Skincare')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    
    @livewireStyles
</head>
<body class="bg-gray-50" x-data="{ mobileMenuOpen: false }">
    @livewire('side-cart')

    <nav class="fixed top-0 w-full flex items-center justify-between px-6 py-4 bg-white/30 backdrop-blur-md z-50 shadow">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-800 text-2xl focus:outline-none">
            <span x-show="!mobileMenuOpen">☰</span>
            <span x-show="mobileMenuOpen" x-cloak>&times;</span>
        </button>

        <div class="text-xl md:text-2xl font-bold text-gray-800 text-center flex-grow md:flex-grow-0">
            <a href="/">AuraSkin</a>
        </div>

        <ul class="hidden md:flex items-center gap-6">
            <li><a href="/" class="font-medium text-gray-800 hover:text-orange-500">Home</a></li>

            @auth
                @if(Auth::check() && Auth::user()->is_admin == 1)
                <li><a href="/admin/dashboard" class="font-bold text-red-600 hover:text-red-800">ADMIN PANEL</a></li>
                @endif
            @endauth

            {{-- Navigation Categories (Shared via AppServiceProvider) --}}

            @foreach($navGrouped as $groupName => $navCategories)
            <li class="relative group">
                <button class="font-medium text-gray-800 hover:text-orange-500">{{ $groupName }}</button>
                <ul class="absolute top-full left-0 hidden group-hover:block bg-white shadow-lg rounded-lg p-2 min-w-[150px]">
                    @foreach($navCategories as $cat)
                        <li><a href="/category/{{ $cat->name }}" class="block px-3 py-1 hover:text-orange-500">{{ $cat->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>

        <div class="flex items-center gap-4">
            @auth
                <div class="flex items-center gap-3 border-r pr-4 relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="flex items-center gap-2 focus:outline-none">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=AB6A2C&color=fff" 
                             class="w-8 h-8 rounded-full shadow-sm" alt="User">
                        
                        <span class="text-sm font-bold text-gray-800 hover:text-orange-500 leading-none">
                            {{ Auth::user()->name }}
                        </span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="open" 
                         x-cloak
                         class="absolute top-full right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 ring-1 ring-black ring-opacity-5">
                        <a href="/user/orders" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Orders</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="flex items-center gap-1 text-sm font-medium">
                    <img src="{{ asset('assets/images/user.png') }}" class="w-6 h-6" alt="Login">
                    <span class="hidden md:inline text-gray-800">Login</span>
                </a>
            @endauth

            <button x-data @click="Livewire.dispatch('toggleCart')" type="button" class="relative z-[60] outline-none ml-2">
                <img src="{{ asset('assets/images/cart.png') }}" class="w-6 h-6 md:w-7 md:h-7 cursor-pointer" alt="Cart">
                @livewire('cart-count')
            </button>
        </div>
    </nav>

    <div x-show="mobileMenuOpen" 
         x-transition 
         class="fixed inset-0 bg-white z-[40] flex flex-col p-10 md:hidden pt-24" 
         x-cloak>
        <ul class="space-y-6 text-xl font-bold">
            <li><a href="/" @click="mobileMenuOpen = false">Home</a></li>
            {{-- Dynamic Mobile Menu (Shared via AppServiceProvider) --}}

            @foreach($navGrouped as $groupName => $navCategories)
                <hr>
                <p class="text-sm text-gray-400 uppercase">{{ $groupName }}</p>
                @foreach($navCategories as $cat)
                    <li><a href="/category/{{ $cat->name }}" @click="mobileMenuOpen = false">{{ $cat->name }}</a></li>
                @endforeach
            @endforeach
        </ul>
    </div>

    <main class="{{ Request::is('/') ? '' : 'pt-24' }} min-h-screen">
    {{-- This checks if Livewire is sending a $slot, otherwise it uses normal @yield --}}
    @if(isset($slot))
        {{ $slot }}
    @else
        @yield('content')
    @endif
    </main>

    <!-- Footer -->
  <footer class="text-white py-10 mt-20" style="background-color: #AB6A2C;">
    <div class="container mx-auto px-6">

    
      <div class="flex flex-col md:flex-row md:justify-between md:text-left text-center gap-10">

        
        <div class="flex-1">
          <h2 class="text-2xl font-bold">AuraSkin</h2>
          <p class="mt-3 text-white-300">
            Premium skincare <br> products made for <br> Sri Lanka.
          </p>
        </div>

        <div class="flex-1">
          <h3 class="font-semibold text-lg mb-3">Quick Links</h3>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-black-400">Home</a></li>
            <li><a href="#" class="hover:text-black-400">Shop</a></li>
            <li><a href="#" class="hover:text-black-400">About Us</a></li>
          </ul>
        </div>

   
        <div class="flex-1">
          <h3 class="font-semibold text-lg mb-3">Services</h3>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-black-400">Consultations</a></li>
            <li><a href="#" class="hover:text-black-400">Online Orders</a></li>
            <li><a href="#" class="hover:text-black-400">Free Delivery (Sri Lanka)</a></li>
          </ul>
        </div>

       
        <div class="flex-1">
          <h3 class="font-semibold text-lg mb-3">Contact</h3>
          <p>Colombo, Sri Lanka</p>
          <p>+94 713 334 567</p>
          <p>info@auraskin.lk</p>
        </div>

      </div>

    
      <div class="text-center text-white-500 mt-10 pt-6 border-t border-white-700">
        &copy; 2025 AuraSkin. All rights reserved.
      </div>

    </div>
  </footer>
    @livewireScripts
</body>
</html>