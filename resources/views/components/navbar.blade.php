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
            @if(Auth::user()->is_admin)
            <li><a href="/admin/dashboard" class="font-bold text-red-600 hover:text-red-800">ADMIN PANEL</a></li>
            @endif
        @endauth

        <li class="relative group">
            <button class="font-medium text-gray-800 hover:text-orange-500">FaceCare</button>
            <ul class="absolute top-full left-0 hidden group-hover:block bg-white shadow-lg rounded-lg p-2 min-w-[150px]">
                <li><a href="/category/cleanser" class="block px-3 py-1 hover:text-orange-500">Cleanser</a></li>
                <li><a href="/category/moisturizer" class="block px-3 py-1 hover:text-orange-500">Moisturizer</a></li>
                <li><a href="/category/facewash" class="block px-3 py-1 hover:text-orange-500">Face Wash</a></li>
                <li><a href="/category/serum" class="block px-3 py-1 hover:text-orange-500">Serum</a></li>
                <li><a href="/category/suncreen" class="block px-3 py-1 hover:text-orange-500">Sunscreen</a></li>
            </ul>
        </li>

        <li class="relative group">
            <button class="font-medium text-gray-800 hover:text-orange-500">BodyCare</button>
            <ul class="absolute top-full left-0 hidden group-hover:block bg-white shadow-lg rounded-lg p-2 min-w-[150px]">
                <li><a href="/category/bodylotion" class="block px-3 py-1 hover:text-orange-500">Body Lotion</a></li>
                <li><a href="/category/showergel" class="block px-3 py-1 hover:text-orange-500">Shower Gel</a></li>
                <li><a href="/category/bodyscrub" class="block px-3 py-1 hover:text-orange-500">Body Scrub</a></li>
                <li><a href="/category/bodysunscreen" class="block px-3 py-1 hover:text-orange-500">Sunscreen</a></li>
                <li><a href="/category/deodorant" class="block px-3 py-1 hover:text-orange-500">Deodorant</a></li>
            </ul>
        </li>
    </ul>

    <div class="flex items-center gap-4">
        @auth
            {{-- LOGGED IN VIEW --}}
            {{-- LOGGED IN VIEW --}}
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

                {{-- Dropdown Menu --}}
                <div x-show="open" 
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute top-full right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 ring-1 ring-black ring-opacity-5"
                     style="display: none;">
                    
                    <a href="/user/orders" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Orders</a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
        @else
            {{-- GUEST VIEW --}}
            <a href="{{ route('login') }}" class="flex items-center gap-1 text-sm font-medium">
                <img src="{{ asset('assets/images/user.png') }}" class="w-6 h-6" alt="Login">
                <span class="hidden md:inline">Login</span>
            </a>
            {{-- Removed Join button as requested --}}
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
        <hr>
        <p class="text-sm text-gray-400 uppercase">Face Care</p>
       
        <li><a href="/category/cleanser" @click="mobileMenuOpen = false">Cleanser</a></li>
        <li><a href="/category/moisturizer" @click="mobileMenuOpen = false">Moisturizer</a></li>
        <li><a href="/category/facewash" @click="mobileMenuOpen = false">Face Wash</a></li>
        <li><a href="/category/serum" @click="mobileMenuOpen = false">Serum</a></li>
        <li><a href="/category/suncreen" @click="mobileMenuOpen = false">Sunscreen</a></li>
        <hr>
        <p class="text-sm text-gray-400 uppercase">Body Care</p>
        <li><a href="/category/bodylotion" @click="mobileMenuOpen = false">Body Lotion</a></li>
        <li><a href="/category/showergel" @click="mobileMenuOpen = false">Shower Gel</a></li>
        <li><a href="/category/bodyscrub" @click="mobileMenuOpen = false">Body Scrub</a></li>
        <li><a href="/category/bodysunscreen" @click="mobileMenuOpen = false">Sunscreen</a></li>
        <li><a href="/category/deodorant" @click="mobileMenuOpen = false">Deodorant</a></li>
    </ul>
</div>
