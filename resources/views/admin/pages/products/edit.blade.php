@extends('admin/layout/app')

@section('title', 'Editar Produto '.$product->name)

@section('content')
    <h1>Editar produto {{ $product->name }}</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">        
        @method('PUT')
        @csrf <!-- Token para validar o cadastro -->
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="your description" value="{{ $product->description }}">        
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="price" placeholder="preço" value="{{ $product->price }}">        
        </div>
        <div class="form-group">
            <input class="form-control" type="file" name="image">        
        </div>
        <div class="form-group">
            <input type="submit" value="Enviar">
        </div>        
    </form>
@endsection

