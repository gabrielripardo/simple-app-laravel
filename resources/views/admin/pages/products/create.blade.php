@extends('admin/layout/app')

@section('title', 'Cadastro de Produto');

@section('content')
    <h1>Cadastrar novo produto</h1>
    <form action="{{ route('products.store') }}" method="POST">        
        @csrf <!-- Token para validar o cadastro -->
        <input type="text" name="name" placeholder="name">
        <input type="text" name="description" placeholder="your description">        
        <input type="submit" value="Enviar">
    </form>
@endsection