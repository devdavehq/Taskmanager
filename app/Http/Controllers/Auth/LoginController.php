<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Find the user
        $user = User::where('email', $validated['email'])->first();

        // Check if user exists and password is correct
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to the dashboard (or any other route you want)
            return redirect()->route('tasks.index')->with('status', 'Login successful');
        }

        // If credentials are invalid, return back with error
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}
