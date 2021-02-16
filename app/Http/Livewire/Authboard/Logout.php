<?php

namespace App\Http\Livewire\Authboard;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Session;

class Logout extends Component
{
    public function logout(){
      Auth::logout();
      Session::flush();
      return redirect()->to('/');
    }
    public function render()
    {
        return <<<'blade'
            <div>
                <a class="logoutBtn cursor-pointer" wire:click="logout">Logout</a>
            </div>
        blade;
    }
}
