<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegister;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'user_phone' => ['required', 'string', 'max:15', 'unique:users'],
            'user_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $activation_code = Str::random(50);

        $user = User::create([
            'user_code' => Str::orderedUuid(),
            'user_name' => $data['username'],
            'user_nickname' => $data['username'],
            'user_phone' => $data['user_phone'],
            'user_email' => $data['user_email'],
            'user_password' => Hash::make($data['password']),
            'user_bio' => 'Hello World',
            'user_profile' => '',
            'is_active' => 0,
            'activation_code' => $activation_code,
        ]);

        // Encrypt the activation code and send it to the user
        $activation_code = md5($activation_code);

        // Send confirmation email to the user
        Mail::to($data['user_email'])->send(new UserRegister($activation_code, $user->user_code));

        // Flass message
        session()->flash('msg_register', 'Congratulations, your account registration was successful! <br> Please check your email to verify your account');

        return $user;
    }
}
