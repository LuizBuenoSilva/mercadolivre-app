@extends('layouts.app')

@section('content')
    <h2>Criar Novo Produto</h2>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Nome do Produto</label>
        <input type="text" name="name" required>

        <label for="category_id">Categoria</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>

        <label for="price">Preço</label>
        <input type="number" step="0.01" name="price" required>

        <label for="stock_quantity">Quantidade</label>
        <input type="number" name="stock_quantity" required>

        <label for="description">Descrição</label>
        <textarea name="description"></textarea>

        <label for="image">Imagem</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Criar Produto</button>
    </form>
@endsection
