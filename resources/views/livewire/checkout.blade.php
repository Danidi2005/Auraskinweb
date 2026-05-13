<div class="container mx-auto px-4 py-8">
    <form wire:submit.prevent="processPayment">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            {{-- Left Side: Delivery Notice & Form --}}
            <div>
                {{-- Delivery Notice --}}
                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-blue-700">
                                <strong>Delivery Info:</strong> Colombo (3-5 days) | Outside Areas (3-8 days)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-semibold mb-6">Shipping Details</h2>
                    
                    <div class="grid grid-cols-1 gap-6">
                        {{-- Name --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" wire:model="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        {{-- Address --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Address</label>
                            <input type="text" wire:model="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                            @error('address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        {{-- City & Postal Code --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" wire:model="city" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                @error('city') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Postal Code</label>
                                <input type="text" wire:model="postal_code" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                                @error('postal_code') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        {{-- Phone --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="text" wire:model="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500">
                            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>

                        {{-- Payment Method --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Payment Method</label>
                            <div class="flex gap-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="payment_method" value="Cash" class="form-radio text-indigo-600 focus:ring-orange-500">
                                    <span class="ml-2">Cash on Delivery</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="payment_method" value="Card" class="form-radio text-indigo-600 focus:ring-orange-500">
                                    <span class="ml-2">Card Payment</span>
                                </label>
                            </div>
                            @error('payment_method') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    {{-- Place Order Button --}}
                    <div class="mt-8">
                        <button type="submit" class="w-full bg-[#333333] text-white py-4 rounded-lg font-bold text-lg hover:bg-black transition-colors shadow-lg">
                            Place Order
                        </button>
                    </div>
                </div>
            </div>

            {{-- Right Side: Cart Summary --}}
            <div>
                <div class="bg-gray-50 rounded-lg shadow-md p-6 sticky top-6">
                    <h2 class="text-xl font-semibold mb-4 border-b pb-2">Order Summary</h2>
                    
                    @if(count($cart) > 0)
                        <div class="space-y-4 mb-6">
                            @foreach($cart as $id => $item)
                                <div class="flex items-center gap-4">
                                <img src="{{ file_exists(public_path('storage/products/' . $item['image'])) ? asset('storage/products/' . $item['image']) : asset('assets/images/' . $item['image']) }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-contain bg-white rounded border">
                                    <div class="flex-1">
                                        <h4 class="text-sm font-medium text-gray-900">{{ $item['name'] }}</h4>
                                        <div class="flex justify-between mt-1">
                                            <p class="text-xs text-gray-500">Qty: {{ $item['quantity'] }}</p>
                                            <p class="text-sm font-medium text-gray-900">Rs. {{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500 text-center py-4">Your cart is empty.</p>
                    @endif

                    <div class="border-t pt-4">
                        <div class="flex justify-between items-center text-lg font-bold">
                            <span>Grand Total</span>
                            <span>Rs. {{ number_format($grandTotal, 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom: Place Order Button --}}

    </form>
</div>
