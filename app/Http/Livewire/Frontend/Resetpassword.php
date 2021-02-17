<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserVerify;
use Session;

class Resetpassword extends Component
{
    public $email, $password, $password_confirmation, $token;
    protected $rules = [
      'token' => 'required',
      'email' => 'required|email|exists:users,email',
      'password' => 'required|min:8',
      'password_confirmation' => 'required|same:password',
    ];
    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'email.exists' => 'The Email Address Not Found.',
        'password.required' => 'Password Required.',
        'password.min' => 'Minimun 8 Characters Required.',
        'password_confirmation.required' => 'Confirm Password Required.',
        'password_confirmation.same' => 'Password and Confirm Password does not match.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function mount()
    {
        $this->token = request()->token; // this takes into account your optional parameter is named token
    }

    private function resetInputFields(){
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function verifiedEmail($email, $emailToken){
      $uid = User::select('id')->where('email', $email)->first();
      $verifyUser = UserVerify::where('user_id', $uid->id)->where('emailcode', $emailToken)->first();
      if(isset($verifyUser)){
        $verified = $verifyUser->email_verified;
        if($verified == '0') {
          UserVerify::where('user_id', $uid->id)->where('emailcode', $emailToken)->update(['email_verified' => '1', 'active' => '1']);
          session()->flash('message', 'You have successful verified your email. Please login');
          return redirect()->to('/login');
        }else{
          session()->flash('message', 'Your e-mail already verified. You can now login.');
          return redirect()->to('/login');
        }
      }else{
        session()->flash('error', 'There is an error with email verification.');
        return redirect()->to('/login');
      }
    }

    public function resetPassword()
    {
      $requestData = ['email' => $this->email, 'password' => $this->password, 'password_confirmation' => $this->password_confirmation, 'token' => $this->token];
      $status = Password::reset(
              $requestData,
              function ($user, $password) use ($requestData) {
                  $user->forceFill([
                      'password' => Hash::make($this->password)
                  ])->save();

                  $user->setRememberToken(Str::random(60));
                  $this->resetInputFields();
                  return redirect()->to('/login');
              }
          );
    }
    public function render()
    {
        return view('livewire.frontend.resetpassword');
    }
}
