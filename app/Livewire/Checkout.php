<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Checkout extends Component
{
    public $cart = [];
    public $subtotal = 0;
    public $grandTotal = 0;

    // Form Fields
    public $name;
    public $address;
    public $city;
    public $postal_code;
    public $phone;
    public $payment_method = 'Cash'; // Default

    protected $rules = [
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'postal_code' => 'required|string|max:20',
        'phone' => 'required|string|max:20',
        'payment_method' => 'required|in:Cash,Card',
    ];

    public function mount()
    {
        $this->cart = Session::get('cart', []);
        $this->calculateTotals();
    }

    public function calculateTotals()
    {
        $this->subtotal = 0;
        foreach ($this->cart as $item) {
            $this->subtotal += $item['price'] * $item['quantity'];
        }
        $this->grandTotal = $this->subtotal; // Add tax/shipping if needed later
    }

    public function processPayment()
    {
        $this->validate();

        if (empty($this->cart)) {
            session()->flash('error', 'Your cart is empty.');
            return;
        }

        // Create Order
        $order = Order::create([
            'user_id' => auth()->id(), // Nullable in DB
            'name' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone,
            'payment_method' => $this->payment_method,
            'total_amount' => $this->grandTotal,
        ]);

        // Create Order Items
        foreach ($this->cart as $id => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id, // Assuming cart keys are product IDs
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear Cart
        Session::forget('cart');
        $this->cart = [];
        // Dispatch event for SideCart to update (if needed, though we redirect)
        $this->dispatch('cartUpdated'); 

        return redirect()->route('thank-you');
    }

    public function render()
    {
        // This tells Livewire: "Stop looking in components.layouts and use my actual layout!"
        return view('livewire.checkout')->layout('layouts.app');
    }
}
