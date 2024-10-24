<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index() {
        return view('pages/login');
    }

    public function register() {
        return view('pages/register');
    }

    public function registering(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = bcrypt($request->password);
        $item->save();

        return to_route('login');
    }

}
