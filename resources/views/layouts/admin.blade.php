<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AuraSkin Admin') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex">
        <aside class="w-64 bg-[#1a1a1a] text-white flex flex-col fixed h-full z-20">
            <div class="h-16 flex items-center justify-center border-b border-gray-700">
                <a href="/" class="text-2xl font-bold text-orange-500 tracking-wider">AuraSkin</a>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-orange-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.categories.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.categories.*') ? 'bg-orange-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                    Categories
                </a>

                <a href="{{ route('admin.products.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.products.*') ? 'bg-orange-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    Products
                </a>

                <a href="{{ route('admin.customers.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.customers.*') ? 'bg-orange-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Customers
                </a>
                
                <a href="{{ route('admin.orders.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.orders.*') ? 'bg-orange-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} rounded-lg transition-colors">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    Orders
                </a>
            </nav>

            <div class="px-4 py-4 border-t border-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center text-gray-400 hover:text-white transition-colors w-full">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 ml-64 flex flex-col relative w-full min-h-screen">
             <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        @yield('header', 'Dashboard')
                    </h2>
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-gray-500">Welcome, {{ Auth::user()->name }}</span>
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=AB6A2C&color=fff" class="w-8 h-8 rounded-full">
                    </div>
                </div>
            </header>

            <main class="flex-1 p-8">
                 {{-- Status Messages --}}
                 @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                 @endif

                 @yield('content') {{-- THIS REPLACES $slot --}}
            </main>

            <footer class="text-white py-6 mt-auto" style="background-color: #AB6A2C;">
                <div class="container mx-auto text-center px-4">
                    <p>&copy; {{ date('Y') }} AuraSkin Admin Panel. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>