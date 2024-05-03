<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headerBord extends Component
{
    public string $descricao;
    public function __construct(public string $texto)
    {
        $this->descricao = $texto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-bord');
    }
}
