@extends('main')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-lg mx-auto bg-white shadow-md rounded-lg p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Criar Produto</h1>

            <form action="/produtos" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome do Produto</label>
                    <input type="text" name="nome" id="nome" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nome do produto" required>
                </div>

                <div class="mb-4">
                    <label for="cod" class="block text-gray-700 text-sm font-bold mb-2">Código do Produto</label>
                    <input type="text" name="cod" id="cod" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Código do produto" required>
                </div>

                <div class="mb-4">
                    <label for="preco" class="block text-gray-700 text-sm font-bold mb-2">Preço</label>
                    <input type="number" step="0.01" name="preco" id="preco" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Preço" required>
                </div>

                <div class="mb-4">
                    <label for="descricao" class="block text-gray-700 text-sm font-bold mb-2">Descrição</label>
                    <textarea name="descricao" id="descricao" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Descrição do produto" required></textarea>
                </div>

                <div class="mb-6">
                    <label for="imagem" class="block text-gray-700 text-sm font-bold mb-2">Imagem do Produto</label>
                    <input type="file" name="imagem" id="imagem" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Criar Produto</button>

                    <a href="/produtos" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
