<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\staff;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

  use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
 //protected $redirectTo = '/home';
 //protected $redirectTo = '/staff';
 protected $guard = 'staff';
 /**

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:staff')->except('logout');
    }
    public function  staffloginform(){
        return view('staff.login',['url'=>'staff']);
    }
    public function stafflogin(Request $request){
        $this->validate($request,[ 
            'email' =>'required|email',
            'password' => 'required|min:2'
    
    ]);
       if(Auth::guard('staff')->attempt(['email'=>$request->email,'password'=>$request->password],)){
         return redirect()->intended('/staffdashboard');
      }else{
        abort(403);

}
}
}