<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalOrders = Order::count();
        $totalCustomers = User::where('is_admin', 0)->count();
        $totalProducts = Product::count();
        $totalRevenue = Order::sum('total_amount');

        return view('admin.dashboard', compact('totalOrders', 'totalCustomers', 'totalProducts', 'totalRevenue'));
    }
}
