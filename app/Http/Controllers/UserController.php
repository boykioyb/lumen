<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function postLogin(Request $rs){
          $this->validate($rs, [
            'username' => 'required', 
            'password' => 'required',
        ]);
        $user = User::where('username', $rs->input('username'))->first();
        if($user){
            if (Hash::check($rs->input('password'), $user->password)) {
               return view('hello');
            }
            else{
                $msg = "Wrong password";
              return view('login',compact('msg'));
            }
     
        }else{
            $mst = "Wrong username";
              return view('login',compact('mst'));
     
        }
    }
}
