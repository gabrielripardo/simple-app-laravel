@extends('admin/layout/app')

@section('title', 'Detalhes do produto')
    
@section('content')
    <h1>{{$product->name}}</h1>
    <ul>
        <li><strong>Nome: </strong>{{$product->name}}</li>
        <li><strong>Price: </strong>{{$product->price}}</li>
        <li><strong>Description: </strong>{{$product->description}}</li>
    </ul>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>

@endsection