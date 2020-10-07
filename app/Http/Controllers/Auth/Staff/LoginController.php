<?php

namespace App\Http\Controllers\Auth\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
//use Route;

class LoginController extends Controller
{
   
  public function __construct()
    {
        //defining our middleware for this controller
        $this->middleware('guest:staff',['except' => ['logout']]);
    } 
 public function  staffloginform(){
        return view('staff.login');
    }
    public function stafflogin(Request $request){
      $this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

      if (Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    
        return redirect()->route('staffdashboard')->with('success', 'You are logged in as an admin');
    }
    
    elseif (Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        return redirect()->route('staffdashboard')->with('success', 'You are logged in as an employee');
    }
    
    return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'Please provide correct credentials');
  }

}  

   
 
