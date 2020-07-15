@extends('admin/layout/app')

@section('title', 'Editar Produto');

@section('content')
    <h1>Editar produto {{ $id }}</h1>
    <form action="{{ route('products.update', $id) }}" method="POST">        
        @method('PUT')
        @csrf <!-- Token para validar o cadastro -->
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="your description">        
        <input type="submit" value="Enviar">
    </form>
@endsection