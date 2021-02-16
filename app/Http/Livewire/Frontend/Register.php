<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\UserVerify;
use App\Jobs\VerificationEmail;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation, $cnfAgree;
    protected $rules = [
      'name' => 'required',
      'email' => 'required|email|unique:users,email,',
      'password' => 'required|min:8',
      'password_confirmation' => 'required|same:password',
      'cnfAgree' => 'required',
    ];
    protected $messages = [
        'name.required' => 'Your Name Required.',
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'email.unique' => 'The Email Address Already Exist.',
        'password.required' => 'Password Required.',
        'password.min' => 'Minimun 8 Characters Required.',
        'password_confirmation.required' => 'Confirm Password Required.',
        'password_confirmation.same' => 'Password and Confirm Password does not match.',
        'cnfAgree.required' => 'Please Confirm Terms and Conditions.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.frontend.register');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->cnfAgree = '';
    }

    public function saveUser()
    {
        $validatedData = $this->validate();
        $this->password = Hash::make($this->password);
        $user = User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        // Verification code
        $verify= new UserVerify();
        $verify->user_id = $user->id;
        $verify->emailcode = base64_encode($this->email);
        $verify->save();

        // Send verificatioon Email
        dispatch(new VerificationEmail($user, $verify));
        $this->resetInputFields();
        session()->flash('message', 'You have succussfully created your account.');
        return redirect()->to('/verify-email');
    }
}
