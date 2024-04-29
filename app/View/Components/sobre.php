<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sobre extends Component
{

    public function __construct(
        public string $title,
        public string $descricao,
        public string $ico
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
        return view('components.sobre');
    }
}
