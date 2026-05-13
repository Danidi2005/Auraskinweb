<div class="flex flex-col gap-3">
    <div class="flex items-center border border-gray-300 rounded-lg w-max overflow-hidden bg-white">
        <button wire:click="$set('quantity', {{ max(1, $quantity - 1) }})" class="px-3 py-1 bg-gray-100 hover:bg-gray-200">-</button>
        <span class="px-4 py-1 font-bold text-gray-700">{{ $quantity }}</span>
        <button wire:click="$set('quantity', {{ $quantity + 1 }})" class="px-3 py-1 bg-gray-100 hover:bg-gray-200">+</button>
    </div>

    <button wire:click="addToCart" class="w-full bg-[#333333] text-white py-2 rounded-lg font-bold hover:bg-black transition-all active:scale-95 shadow-md">
        ADD TO CART
    </button>
</div>