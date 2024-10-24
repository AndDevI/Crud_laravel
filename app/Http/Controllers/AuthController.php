<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('pages/login');
    }

    public function register() {
        return view('pages/register');
    }

    public function registering(Request $request) {
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = bcrypt($request->password);
        $item->save();

        return to_route('login');
    }
}
