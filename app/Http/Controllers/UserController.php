<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getlogin()
    {
      return view('login');
    }
    public function postlogin(Request $request)
    {
      $this->validate($request,[
        'email'=>'required',
        'password'=>'required'
      ]);
      if(Auth::Attempt(['email'=>$request['email'], 'password'=>$request['password']]))
        {
            return redirect()->route('home');
        }
        $request->flash();
        return redirect()->back()->with([
          'message'=>'Email or Password is Wrong.'
        ]);
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
