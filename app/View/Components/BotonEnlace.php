<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotonEnlace extends Component
{
    /**
     * Create a new component instance.
     */
    public $ruta;
    public $evento;
    public function __construct($ruta='/', $evento='')
    {
        //por defecto la ruta es la /
        $this->ruta = $ruta;
        $this->evento = $evento;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.boton-enlace');
    }
}
