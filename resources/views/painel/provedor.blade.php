<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Dashboard</title>
</head>
<body>
    <x-dashboard.menu/>
    <x-dashboard.header-bord/>
    
    
    @if (Request::is('dashboard/provedor/cadastro'))
        <x-dashboard.cadastro-provedor />
    @elseif (Request::is('dashboard/provedor/lista'))
        <x-dashboard.visualisar-provedor />        
    @endif
    
    <script src="{{ asset('js/painel.js') }}"></script>
</body>
</html>