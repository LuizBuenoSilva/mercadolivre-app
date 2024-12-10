@extends('layouts.app')

@section('content')
    <h1>Lista de Produtos</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock_quantity }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50">
                        @else
                            Sem imagem
                        @endif
                    </td>
                    <td>
                        <!-- Botão para Editar -->
                       <!-- Botão para Editar -->
<a href="{{ route('products.edit', $product->id) }}" class="btn btn-action">Editar</a>

<!-- Botão para Excluir -->
<form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-action" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
</form>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botão para Adicionar Novo Produto -->
    <div style="margin-top: 20px;">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Adicionar Novo Produto</a>
    </div>
@endsection
