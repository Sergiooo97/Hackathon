<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\proyecto;
class ProyectoShow extends Component
{
    public $proyectos;

    public function mount(){
        $this->proyectos = [];
    }
    public function render()
    {
        $this->proyectos=proyecto::all()->where('equipoNumber', '=', auth()->user()->equipoNumber);
        return view('livewire.proyecto-show');
    }
}
