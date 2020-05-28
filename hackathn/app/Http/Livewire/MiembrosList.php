<?php

namespace App\Http\Livewire;
use App\User;

use Livewire\Component;

class MiembrosList extends Component
{
     public $users;
 
     public function mount(){

        $this->users = [];
       }
    public function render()
    {
        
        $this->users=User::all()
        ->where('equipoNumber', '=', auth()->user()->equipoNumber);
        //->WhereNotIn("id", [auth()->user()->id]);
        //->where('equipoNumber', '=', auth()->user()->equipoNumber);
        return view('livewire.miembros-list');
    }
}
