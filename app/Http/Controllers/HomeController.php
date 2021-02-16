<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\UserVerify;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware(['auth','verified']);
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        echo "test controller";
        die;
        return view('home');
    }
    // Verify Email
    public function verifyemail($email, $token){
        echo $email;
        echo $token;
        die;
        $uid = User::select('id')->where('email', $email)->first();
        $verifyUser = UserVerify::where('user_id', $uid->id)->where('emailcode', $token)->first();
        if(isset($verifyUser)){
          $user = $verifyUser->email_verified;
          if($user == '0') {
            UserVerify::where('user_id', $uid->id)->where('emailcode', $token)->update(['email_verified' => '1', 'active' => '1']);
            return Redirect::to('/login');
          }else{
            Session::flash('message', 'Your e-mail already verified. You can now login.');
            return Redirect::to('/login');
          }
        }else{
          Session::flash('error', 'There is an error with email verification.');
          return Redirect::to('/login');
        }
       return redirect('/');

    }
}
