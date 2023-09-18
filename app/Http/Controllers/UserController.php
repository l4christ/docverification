<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        return view('homepage');
    }

    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('/dashboard');


    }

    public function login(): View
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
            
            return redirect('/dashboard');
        } else {
            return 'Invalid';
        }
    }

    public function dashboard(): View
    {
        if (auth()->check()) {
            return view('dashboard');
        } else {
            return view('login');
        }
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect('/login')->with('success', 'You are now signed out');
    }

}
