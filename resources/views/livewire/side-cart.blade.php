<div class="relative">
    <div 
        class="fixed inset-0 bg-black/40 backdrop-blur-sm z-[90] transition-opacity duration-300 {{ $isOpen ? 'opacity-100' : 'opacity-0 pointer-events-none' }}" 
        wire:click="toggle">
    </div>

    <div class="fixed top-0 right-0 w-80 md:w-96 h-full bg-white shadow-2xl z-[100] transform transition-transform duration-300 ease-in-out {{ $isOpen ? 'translate-x-0' : 'translate-x-full' }}">
        
        <div class="flex justify-between items-center p-6 border-b bg-gray-50">
            <h2 class="text-xl font-bold text-gray-800">Your AuraSkin Cart</h2>
            <button wire:click="toggle" class="text-3xl text-gray-500 hover:text-orange-500 transition-colors">&times;</button>
        </div>

        <div class="p-6 h-full flex flex-col">
            @if(count($cart) > 0)
                <div class="flex-1 overflow-y-auto space-y-4">
                    @foreach($cart as $id => $item)
                        <div class="flex items-center gap-4 border-b pb-4">
                            <img src="{{ file_exists(public_path('storage/products/' . $item['image'])) ? asset('storage/products/' . $item['image']) : asset('assets/images/' . $item['image']) }}" 
                                 alt="{{ $item['name'] }}" 
                                 class="w-16 h-16 object-cover rounded shadow-sm">
                            
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-gray-900">{{ $item['name'] }}</h4>
                                <div class="flex justify-between mt-1 items-center">
                                    <p class="text-xs text-gray-500">Qty: {{ $item['quantity'] }}</p>
                                    <p class="text-sm font-medium text-gray-900">Rs. {{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                </div>
                            </div>
                            <button wire:click="removeFromCart({{ $id }})" class="text-red-500 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
                
                <div class="border-t pt-4 mt-auto mb-20"> <div class="flex justify-between items-center text-lg font-bold mb-4">
                        <span>Grand Total</span>
                        <span class="text-[#AB6A2C]">Rs. {{ number_format(collect($cart)->sum(fn($i) => $i['price'] * $i['quantity']), 2) }}</span>
                    </div>
                    <a href="{{ route('checkout') }}" class="block w-full bg-[#AB6A2C] text-white text-center py-3 rounded-lg font-semibold hover:bg-orange-700 transition-colors uppercase tracking-widest shadow-md">
                        Proceed to Checkout
                    </a>
                </div>
            @else
                <div class="flex flex-col items-center justify-center py-10 h-full">
                    <img src="{{ asset('assets/images/cart.png') }}" class="w-16 h-16 opacity-20 mb-4" alt="Empty Cart">
                    <p class="text-gray-400">Your cart is currently empty.</p>
                    <button wire:click="toggle" class="mt-8 text-[#AB6A2C] hover:underline">
                        Continue Shopping
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>