<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>
<body>
    <h1 style="color: #ff0000; text-align:center">@yield('header')</h1>
    @yield('conteudo')
    <div class="menu.rodape" style="text-align: center;">
        <br>
        <h2>Opções de navegação</h2>
        <a href="{{route('view.index')}}">Entrada</a>
        <a href="{{route('noticias.index')}}">Noticias</a>
        <a href="{{route('empresa.index')}}">Empresa</a>
        <a href="{{route('onde-estamos.index')}}">Onde Estamos</a>
        <a href="{{route('sites.index')}}">Contactos</a>
        <br>
        <br>
        <a href="{{route('view.index')}}"><img src="{{asset('img/LethalArmsLogo.png')}}" style="width: 7%;"></a>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
</body>
</html>