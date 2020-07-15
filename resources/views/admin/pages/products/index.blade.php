@extends('admin/layout/app')

@section('title', 'Listagem de produtos')
    
@section('content')
    @include('admin/includes/alerts/alerts', ['msg' => 'Mensagem de sucesso ou de erro.']) <!-- Alert com mensagem --> 
    @include('admin/includes/alerts/alerts') <!-- Alert sem mensagem --> 
    <h1>Exibindo produtos...</h1>
    {{$name}}    

    <a href="{{ route('products.create') }}">Cadastrar produto</a>

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
            document.body.style.background = '#000';
        </script>
    @endpush
    
    @if (isset($teste3))
        @foreach ($teste3 as $product)            
            <p class="@if ($loop->last) last @endif">{{$product}}</p>
        @endforeach
    @endif
    
    <hr>

    @forelse ($teste3 as $product)
        <p>{{$product}}</p>
    @empty
        <p>Não existem produtos cadastrados.</p>
    @endforelse

    @if ($num === 4)
        <h3>The number is equal to 7</h3>
    @elseif($num === 8)
        <h3>The number is equal to 8</h3>
    @else 
        <h1>The number is not equal to 7 or 8</h1>
    @endif

    @unless ($num === 1)
        <h3>The number not is equal to 7</h3>        
    @else
        <h3>The number is equal to 7</h3>        
    @endunless

    @isset($num)
        <p>{{$num}}</p>
    @endisset

    @empty($testEmpty)
        <p>Vazio..</p>
    @endempty

    @auth
        <p>Usuário autenticado -> mostra avatar do usuário.</p>
    @else
        <p>Usuário não autenticado -> mostra avatar padrão.</p>
    @endauth    

    @guest
        <p>Usuário não autenticado.</p>
    @endguest
        @switch($num)
            @case(1)
                Igual a 1         
                @break
            @case(2)
                Igual a 2
                @break
            @case(3)
                Igual a 3
                @break
            @case(4) 
                Igual a 4
                @break
            {{-- @case(5) --}} <!-- CTRL+K+C para comentar blade-->
                Igual a 5
                @break
            @case(6)
                Igual a 6
                @break
            @case(7)
                Igual a 7
                @break
            @case(8)
                Igual a 8
                @break
            @default
                Default. Nenhum dos números conhecidos.
        @endswitch


@endsection


