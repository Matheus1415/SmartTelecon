@if(Request::is('dashboard'))
    <x-dashboard.home />
@elseif(Request::is('dashboard/cadastroProvedor'))
    <x-dashboard.cadastro-provedor />
@else
    ops nada renderizado
@endif
