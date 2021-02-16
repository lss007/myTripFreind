<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class Forgotpassword extends Component
{
    public $email;
    protected $rules = [
      'email' => 'required|email|exists:users,email'

    ];
    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'email.exists' => 'The Email Address Not Found.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    private function resetInputFields(){
        $this->email = '';
    }
    public function forgotPassword(){
      $status = Password::sendResetLink(['email' => $this->email]);

      //session()->flash('message', 'You have succussfully sent password reset link.');
      $this->resetInputFields();
      return redirect()->to('/reset-password-sent');
    }
    public function render()
    {
        return view('livewire.frontend.forgotpassword');
    }
}
