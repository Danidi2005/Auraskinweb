@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 uppercase tracking-widest">My AuraSkin Orders</h1>

    @if($orders->isEmpty())
        <div class="bg-white p-10 rounded-2xl shadow-sm text-center border">
            <p class="text-gray-500">You haven't placed any orders yet, bro.</p>
            <a href="/" class="mt-4 inline-block bg-[#AB6A2C] text-white px-6 py-2 rounded-full">Explore Products</a>
        </div>
    @else
        <div class="space-y-6">
            @foreach($orders as $order)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    {{-- Order Header --}}
                    <div class="bg-gray-50 px-6 py-4 flex justify-between items-center border-b">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase font-bold">Order ID</p>
                                <p class="text-sm font-mono text-[#AB6A2C]">#AS-{{ $order->id }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase font-bold">Placed On</p>
                                <p class="text-sm">{{ $order->created_at->format('d M, Y') }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase font-bold">Total Amount</p>
                                <p class="text-sm font-bold">Rs. {{ number_format($order->total_amount, 2) }}</p>
                            </div>
                            <div>
                                <p class="text-[10px] text-gray-400 uppercase font-bold">Status</p>
                                <span class="bg-green-100 text-green-700 text-[10px] px-2 py-1 rounded-full uppercase">{{ $order->status ?? 'Processing' }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Order Items Table --}}
                    <div class="p-6">
                        <table class="w-full">
                            <tbody>
                                @foreach($order->items as $item)
                                    <tr class="border-b last:border-0">
                                        <td class="py-4 flex items-center gap-4">
                                            <img src="{{ asset('assets/images/' . $item->product->image) }}" class="w-12 h-12 object-contain bg-gray-50 rounded">
                                            <div>
                                                <p class="font-bold text-gray-800">{{ $item->product->name }}</p>
                                                <p class="text-xs text-gray-500">Qty: {{ $item->quantity }}</p>
                                            </div>
                                        </td>
                                        <td class="py-4 text-right font-bold text-gray-700">
                                            Rs. {{ number_format($item->price * $item->quantity, 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection