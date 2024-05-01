<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VisualisarProvedor extends Component
{

    public function __construct(
    )
    {
        
    }


    public function render(): View|Closure|string
    {
        return view('components.dashboard.visualisar-provedor');
    }
}
