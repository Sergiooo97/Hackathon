<?php

namespace App\Http\Livewire;
use App\User;
use Livewire\Component;

class MiembrosSide extends Component
{
    public $users;
 
    public function mount(){

       $this->users = [];
      }
    public function render()
    {
        $this->users=User::all()
        ->where('equipoNumber', '=', auth()->user()->equipoNumber);
        //->where('equipoNumber', '=', auth()->user()->equipoNumber);
        return view('livewire.miembros-side');
    }
}
