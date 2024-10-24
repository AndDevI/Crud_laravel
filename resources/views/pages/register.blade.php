@extends('main')

@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Registrar</h1>
            <form action="/register" method="POST" aria-labelledby="register-form">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome</label>
                    <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Seu nome completo" required aria-required="true" aria-label="Full name">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" required aria-required="true" aria-label="Email address">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
                    <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********" required aria-required="true" aria-label="Password">
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirme a Senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********" required aria-required="true" aria-label="Confirm password">
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-150 ease-in-out">Registrar</button>
            </form>

            <p class="mt-6 text-center text-gray-600 text-sm">
                Já tem uma conta? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Entrar</a>
            </p>
        </div>
    </div>
@endsection
