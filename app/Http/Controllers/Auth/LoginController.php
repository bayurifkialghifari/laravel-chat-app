<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'user_email';
    }

    protected function authenticated($user)
    {
        if ($user->is_active) return redirect($this->redirectTo)->with('msg', 'Login success !');

        // User Email
        $email = $user->user_email;

        Auth::logout();

        return redirect()->back()->with([
            'msg_inactive' => 'This account is still not active, please check your email to activate this account !',
            'email' => $email,
        ]);
    }
}
