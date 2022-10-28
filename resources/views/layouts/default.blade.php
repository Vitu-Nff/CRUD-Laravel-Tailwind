<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('styles')
    <title>@yield('title', 'Estudando Laravel')</title>
</head>
<body>

<div class="test">
    <h2>TESTE</h2>
</div>

@yield('content')

@section('sidebar')
    <div>
        <nav>
            Sidebar Padrão
        </nav>
    </div>
@show



@stack('scripts')
</body>
</html>
