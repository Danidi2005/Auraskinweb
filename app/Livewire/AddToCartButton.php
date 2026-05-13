<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class AddToCartButton extends Component
{
    public $productId;
    public $quantity = 1; // Default quantity

    public function addToCart()
    {
        $product = Product::find($this->productId);
        $cart = session()->get('cart', []);

        if(isset($cart[$this->productId])) {
            $cart[$this->productId]['quantity'] += $this->quantity;
        } else {
            $cart[$this->productId] = [
                "name" => $product->name,
                "quantity" => $this->quantity,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        // 1. Update the Navbar Count
        $this->dispatch('cartUpdated');
        
        // 2. Open the SideCart automatically (The "Popup" effect)
        $this->dispatch('toggleCart'); 
    }

    public function render()
    {
        return view('livewire.add-to-cart-button');
    }
}