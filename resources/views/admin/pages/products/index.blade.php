@extends('admin/layout/app')

@section('title', 'Listagem de produtos')
    
@section('content')
    @include('admin/includes/alerts/alerts', ['msg' => 'Mensagem de sucesso ou de erro.']) <!-- Alert com mensagem --> 
    @include('admin/includes/alerts/alerts') <!-- Alert sem mensagem --> 
    <h1>Exibindo produtos...</h1>
    {{$name}}    

    @component('admin/components/card')
        @slot('title')
            Titulo teste - card
        @endslot
            <h4>Conteúdo do Card Body</h4>
    @endcomponent

@endsection

