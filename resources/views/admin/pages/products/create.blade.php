@extends('admin/layout/app')

@section('title', 'Cadastro de Produto')

@section('content')
    @include('admin.includes.alerts.alerts')

    <h1>Cadastrar novo produto</h1>
    <form action="{{ route('products.store') }}" method="POST" class="form" enctype="multipart/form-data">        
        @csrf <!-- Token para validar o cadastro -->
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" placeholder="your description" value="{{ old('description') }}">        
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="price" placeholder="preço" value="{{ old('price') }}">        
        </div>
        <div class="form-group">
            <input class="form-control" type="file" name="image">        
        </div>
        <div class="form-group">
            <input type="submit" value="Enviar">
        </div>        
    </form>
@endsection