<?php

namespace App\Livewire;

use Livewire\Component;

class CartCount extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh'];

    public function render()
    {
        $cart = session()->get('cart', []);
        $count = collect($cart)->sum('quantity');

        return view('livewire.cart-count', [
            'count' => $count
        ]);
    }
}