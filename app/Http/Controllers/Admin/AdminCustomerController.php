<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index()
    {
        // Fetch users who are NOT admins originally, but for management we might want to see all?
        // Prompt says "Read all registered members... toggle is_admin roles". So let's show all.
        // Filter Logic: only fetch users where is_admin = 0 as per request
        $customers = User::where('is_admin', 0)->latest()->paginate(10);
        return view('admin.customers.index', compact('customers'));
    }

    public function update(Request $request, User $customer) // Route param is 'customer' which binds to User model
    {
        // Toggle Admin Role
        $request->validate([
            'is_admin' => 'required|boolean'
        ]);

        $customer->update(['is_admin' => $request->is_admin]);

        return redirect()->back()->with('success', 'User role updated successfully.');
    }

    public function destroy(User $customer)
    {
        $customer->delete();
        return redirect()->back()->with('success', 'User account deleted successfully.');
    }
}
