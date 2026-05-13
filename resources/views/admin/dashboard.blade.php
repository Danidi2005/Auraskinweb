@extends('layouts.admin')

@section('header', 'Dashboard Overview')

@section('content')
<div class="p-2">
    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-sm p-6 flex items-center border border-gray-100 hover:shadow-md transition-shadow">
            <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500 font-medium uppercase tracking-wider">Total Orders</p>
                <p class="text-2xl font-bold text-gray-800">{{ $totalOrders ?? 0 }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 flex items-center border border-gray-100 hover:shadow-md transition-shadow">
             <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div>
                 <p class="text-sm text-gray-500 font-medium uppercase tracking-wider">Customers</p>
                 <p class="text-2xl font-bold text-gray-800">{{ $totalCustomers ?? 0 }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 flex items-center border border-gray-100 hover:shadow-md transition-shadow">
             <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            </div>
             <div>
                 <p class="text-sm text-gray-500 font-medium uppercase tracking-wider">Products</p>
                 <p class="text-2xl font-bold text-gray-800">{{ $totalProducts ?? 0 }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 flex items-center border border-gray-100 hover:shadow-md transition-shadow">
             <div class="p-3 rounded-full bg-orange-100 text-orange-600 mr-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
             <div>
                 <p class="text-sm text-gray-500 font-medium uppercase tracking-wider">Revenue</p>
                 <p class="text-2xl font-bold text-gray-800">Rs. {{ number_format($totalRevenue ?? 0, 2) }}</p>
            </div>
        </div>
    </div>

    {{-- Recent Activity Placeholder --}}
    <div class="mt-8 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Welcome to AuraSkin Management</h3>
        <p class="text-gray-600">Use the sidebar to manage your categories, update your 60+ products, or track incoming customer orders.</p>
    </div>
</div>
@endsection