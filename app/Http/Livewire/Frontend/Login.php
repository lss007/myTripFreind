<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Session;

class Login extends Component
{
    public $email, $password;
    private function resetInputFields(){
        $this->email = '';
        $this->password = '';
    }
    public function userLogin()
     {
         $validatedDate = $this->validate([
             'email' => 'required|email',
             'password' => 'required',
         ]);
         if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
           if(Auth::user()->userVerf->email_verified == '1' && Auth::user()->userVerf->active == '1' && Auth::user()->role_id == 2) {
             session()->flash('message', "You are Login successful.");
             return redirect()->to('/dashboard');
           }else {
              Auth::logout();
              Session::flush();
              session()->flash('error', 'You have not verified your email or wrong user.');
              return redirect()->to('/login');
           }

         }else{
             session()->flash('error', 'Wrong email or password.');
             return redirect()->to('/login');
         }
     }
    public function render()
    {
        return view('livewire.frontend.login');
    }
}
