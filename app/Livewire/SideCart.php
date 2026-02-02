<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; // <--- MUST HAVE THIS

class SideCart extends Component
{
    public $isOpen = false;

    #[On('toggleCart')] 
    public function toggle()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function removeFromCart($productId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }
        
        $this->dispatch('cartUpdated');
    }

    #[On('cartUpdated')]
    public function render()
    {
        return view('livewire.side-cart', [
            'cart' => session()->get('cart', [])
        ]);
    }
}