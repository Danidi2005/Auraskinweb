<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApiAuthController extends Controller
{
    public function login(Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('AuraSkinToken')->plainTextToken; // Generates the 10-mark token
        return response()->json(['token' => $token, 'user' => $user]);
    }
    return response()->json(['message' => 'Invalid login'], 401);
}

public function register(Request $request) {
    $user = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => \Hash::make($request->password),
    ]);
    $token = $user->createToken('AuraSkinToken')->plainTextToken;
    return response()->json(['token' => $token, 'user' => $user], 201);
}

public function checkout(Request $request) {
    // Get the authenticated user's name automatically
    $user = auth()->user();

    $order = \App\Models\Order::create([
        'user_id' => $user->id,
        'name' => $user->name, // This fixes the "Field 'name' doesn't have a default value" error
        'total_amount' => $request->total_amount,
        'status' => 'pending',
        'address' => $request->address,
        'city' => $request->city ?? 'Not Provided',
        'phone' => $request->phone ?? 'Not Provided',
        'postal_code' => $request->postal_code ?? '00000',
        'payment_method' => 'API-Mobile',
    ]);

    return response()->json(['message' => 'Order created!', 'order' => $order]);
}
}
