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
use Illuminate\Http\Request;

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

        // Flash message
        session()->flash('msg_register', 'Congratulations, your account registration was successful! <br> Please check your email to verify your account');

        return $user;
    }

    public function resendEmailConfirmation(Request $request)
    {
        $email = $request->post('email');

        // Get user detail
        $user = User::where('user_email', $email)->first();

        // Generate new activation_code
        $activation_code = Str::random(50);

        // Update activation code
        $user->activation_code = $activation_code;
        $user->save();

        // Encrypt the activation code and send it to the user
        $activation_code = md5($activation_code);

        // Send confirmation email to the user
        Mail::to($email)->send(new UserRegister($activation_code, $user->user_code));

        return redirect()->back()->with('msg_register', 'Your confirmation email has been sent !!');
    }

    public function verifyAccount($code, $id)
    {
        // Find the user
        $user = User::find($id);

        // Check if the user exists
        if ($user) {
            // Check code is valid
            if ($code == md5($user->activation_code)) {

                // Activate the user
                $user->is_active = 1;
                $user->save();

                // Flash message
                session()->flash('msg_register', 'Congratulations, your account is activated! <br> You can now login to your account');

                return redirect('/login');
            } else {

                // Flash message
                session()->flash('msg', 'Your acctivation code is invalid');

                return redirect('/login');
            }
        } else {

            // Flash message
            session()->flash('msg', 'User not found');

            return redirect('/login');
        }
    }
}
