<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Chat;
use \App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class ChatList extends Component
{
    public $user;
    public $chats;
    public $yo;
   public function mount(){

    $this->chats = [];
    $this->user =[];
    $this->yo= auth()->user()->id;
   }
   protected $listeners = [
    'reviewSectionRefresh' => '$refresh',
   ];
    public function render()
    {
        $this->user=User::all()->where('id', '=', '8');
        $this->chats=Chat::all()->where('id_re', '=', $this->yo);
        return view('livewire.chat-list');
    }
}
