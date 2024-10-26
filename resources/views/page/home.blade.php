@extends('main')

@section('content')
    <header class="bg-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-2xl font-bold">
                Meu E-commerce
            </div>

            <div class="flex items-center space-x-4">
                @if(Auth::check())
                    <div class="text-white">
                        Olá, {{ Auth::user()->name }}
                    </div>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="focus:outline-none">
                        <img src="{{ asset('icons/logout.svg') }}" alt="Logout" class="w-10 h-10">
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="m-10">
        @if (Session::has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-6">
            <a href="{{ route('create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Adicionar Produto</a>
        </div>

        <h1 class="text-2xl font-bold text-gray-800 mb-6">Produtos Adicionados</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left"></th>
                        <th class="py-3 px-6 text-left">Nome</th>
                        <th class="py-3 px-6 text-left">Código</th>
                        <th class="py-3 px-6 text-left">Preço</th>
                        <th class="py-3 px-6 text-left">Data de Criação</th>
                        <th class="py-3 px-6 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @if ($products->isNotEmpty())
                        @foreach ($products as $product)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6">{{ $product->id }}</td>
                                <td class="py-3 px-6">
                                    <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover rounded-lg">
                                </td>
                                <td class="py-3 px-6">{{ $product->name }}</td>
                                <td class="py-3 px-6">{{ $product->cod }}</td>
                                <td class="py-3 px-6">R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                                <td class="py-3 px-6">{{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y') }}</td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center space-x-4">
                                        <a href="{{ route('edit', $product->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                                        <a href="" class="text-red-500 hover:text-red-700">Deletar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="py-4 px-6 text-center text-gray-500">Nenhum produto encontrado.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </main>
@endsection
