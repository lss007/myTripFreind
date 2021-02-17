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
                <a wire:click="logout"> <span class="ddIcon"><img src="{{ asset('assets/images/logout-icon.svg') }}" alt="..."></span> <span class="ddLinkText">Logout</span></a>
            </div>
        blade;
    }
}
