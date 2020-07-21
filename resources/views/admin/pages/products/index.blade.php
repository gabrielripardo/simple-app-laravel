@extends('admin/layout/app')

@section('title', 'Listagem de produtos')
    
@section('content')
    @include('admin/includes/alerts/alerts', ['msg' => 'Mensagem de sucesso ou de erro.']) <!-- Alert com mensagem --> 
    
    <h1>Exibindo produtos...</h1>     

    <a class="btn btn-primary" href="{{ route('products.create') }}">Cadastrar produto</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>#</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Categoria</td>
                <td width="100">Ações</td>
            </tr>
        </thead>
        <tbody>            
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id)}}">Editar</a>
                        <a href="{{ route('products.show', $product->id)}}">Detalhes</a>                    
                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>    

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


