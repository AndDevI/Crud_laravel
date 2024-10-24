@extends('main')

@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h1>
            <form action="/login" method="POST" aria-labelledby="login-form">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" required aria-required="true" aria-label="Email address">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
                    <input type="password" name="password" id="password" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="********" required aria-required="true" aria-label="Password">
                </div>

                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Lembrar-me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-500 hover:underline">Esqueceu a senha?</a>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-150 ease-in-out">Entrar</button>
            </form>

            <p class="mt-6 text-center text-gray-600 text-sm">
                Não tem uma conta? <a href="#" class="text-blue-500 hover:underline">Cadastre-se</a>
            </p>
        </div>
    </div>
@endsection
