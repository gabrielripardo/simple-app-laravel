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
            <select class="form-control" name="category" id="category">                
                <option value="">Selecione uma categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach                
            </select>
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

     @component('admin/components/card')
        @slot('title')
            Titulo teste - card
        @endslot
            <h4>Conteúdo do Card Body</h4>
    @endcomponent

    @push('styles')
        <style>
            .last{
                background-color:chartreuse;
            }    
        </style>
    @endpush

    @push('scripts')
        <script>
            //document.body.style.background = '#000';
        </script>
    @endpush      
@endsection