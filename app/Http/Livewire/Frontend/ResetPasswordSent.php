<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ResetPasswordSent extends Component
{
    public $email, $password, $password_confirmation;
    protected $rules = [
      'email' => 'required|email|unique:users,email,',
      'password' => 'required|min:8',
      'password_confirmation' => 'required|same:password',
    ];
    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'email.unique' => 'The Email Address Already Exist.',
        'password.required' => 'Password Required.',
        'password.min' => 'Minimun 8 Characters Required.',
        'password_confirmation.required' => 'Confirm Password Required.',
        'password_confirmation.same' => 'Password and Confirm Password does not match.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    private function resetInputFields(){
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function resetPassword()
    {

    }
    public function render()
    {
        return view('livewire.frontend.reset-password-sent');
    }
}
