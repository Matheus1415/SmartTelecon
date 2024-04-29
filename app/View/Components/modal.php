<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class modal extends Component
{

    public function __construct(
        public string $titulo,
        public string $preco,
        public string $descricao
    )
    {
        //
    }


    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
