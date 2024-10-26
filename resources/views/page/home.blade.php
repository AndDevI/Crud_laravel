@extends('main')

@section('content')
    @if (Session::has('sucess'))
        <div>
            {{ Session::get('success') }}
        </div>
    @endif

    <div>
        <a href="{{ route('create') }}">Adicionar</a>
    </div>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th></th>
                <th>Name</th>
                <th>Cod</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            @if ($products->isNotEmpty())
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>
                            <img src="{{ asset('images'.$product->image) }}" alt="">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->cod }}</td>
                        <td>R${{ $product->price }}</td>
                        <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d m, Y') }}</td>
                        <td>
                            <a href="">Editar</a>
                            <a href="">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection