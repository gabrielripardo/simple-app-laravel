@extends('admin/layout/app')

@section('title', 'Listagem de produtos')
    
@section('content')
    @include('admin/alerts/alerts', ['msg' => 'Mensagem de sucesso ou de erro.']) <!-- Alert com mensagem --> 
    @include('admin/alerts/alerts') <!-- Alert sem mensagem --> 
    <h1>Exibindo produtos...</h1>
    {{$name}}    
@endsection

