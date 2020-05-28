<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IdeaList extends Component
{
    public $ideas;
    
    public function render()
    {
        return view('livewire.idea-list');
    }
}
