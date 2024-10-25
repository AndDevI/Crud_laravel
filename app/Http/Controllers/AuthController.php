<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;

class AuthController extends Controller
{
    public function index() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }

    public function registering(Request $request) {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação de um novo usuário
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = Hash::make($request->password); // Criptografando a senha
        $item->save();

        return to_route('login');
    }

    public function logging(Request $request) {
        // Validação das credenciais
        $credentials = $request->only('email', 'password'); 

        if(Auth::attempt($credentials)) {
            return to_route('home');
        } else {
            return back()->withErrors([
                'email' => 'As credenciais não correspondem aos nossos registros.',
            ])->withInput(); 
        }
    }
}
