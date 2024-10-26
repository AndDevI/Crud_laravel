@extends('main')

@section('content')
    <div class="container mx-auto mt-8">
        <div class="w-full max-w-lg mx-auto bg-white shadow-md rounded-lg p-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Editar Produto</h1>

            <form action="{{ route('update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nome do Produto</label>
                    <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nome do produto" value="{{ old('name', $product->name) }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="cod" class="block text-gray-700 text-sm font-bold mb-2">Código do Produto</label>
                    <input type="text" name="cod" id="cod" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Código do produto" value="{{ old('cod', $product->cod) }}" required>
                    @error('cod')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Preço</label>
                    <input type="number" step="0.01" name="price" id="price" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Preço" value="{{ old('price', $product->price) }}" required>
                    @error('price')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descrição</label>
                    <textarea name="description" id="description" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Descrição do produto" required>{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="imagem" class="block text-gray-700 text-sm font-bold mb-2">Imagem do Produto</label>
                    @if($product->imagem)
                        <div class="mb-4">
                            <img src="{{ asset('images/' . $product->imagem) }}" alt="{{ $product->name }}" class="w-32 h-32 object-cover rounded-lg">
                        </div>
                    @endif

                    <input type="file" name="imagem" id="imagem" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('imagem')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Atualizar</button>

                    <a href="{{ route('home') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">Voltar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
