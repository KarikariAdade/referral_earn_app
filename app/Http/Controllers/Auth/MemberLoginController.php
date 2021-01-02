<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
class MemberLoginController extends Controller
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

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:member')->except('logout');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'member/auth/signup';
    // protected $redirectTo = RouteServiceProvider::HOM£;



// Member Login Form Routes
    public function showMemberLoginForm(){
        return view('member.auth.member_login', ['url' => 'member']);
    }

    //Member Login validation

    public function memberLogin(Request $request){
        // $this->validate($request, [
        //     'email'   => 'required|email',
        //     'password' => 'required|min:6'
        // ]);
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('member')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('member.dashboard'));
        }


        return back()->withInput()->withErrors("Invalid Email Address or Password");
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

}
