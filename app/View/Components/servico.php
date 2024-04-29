<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Blade;

class Servico extends Component
{
    public function __construct(
        public string $titulo,
        public string $preco,
        public string $descricao
    )
    {
        //
    }

    public function boot(): void
    {
        Blade::component('components.servico', Servico::class);
    }

    public function render(): View|Closure|string
    {
        return view('components.servico');
    }
}
