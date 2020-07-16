@extends('admin/layout/app')

@section('title', 'Cadastro de Produto');

@section('content')

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>        
    @endif

    <h1>Cadastrar novo produto</h1>
    <form action="{{ route('products.store') }}" method="POST">        
        @csrf <!-- Token para validar o cadastro -->
        <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
        <input type="text" name="description" placeholder="your description" value="{{ old('description') }}">        
        <input type="submit" value="Enviar">
    </form>
@endsection