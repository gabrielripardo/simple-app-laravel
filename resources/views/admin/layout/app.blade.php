<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Simple App</title>
</head>
<body>
    @yield('content')

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
            @case(5)
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

</body>
</html>