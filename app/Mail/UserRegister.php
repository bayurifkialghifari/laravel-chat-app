<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $activation_code;
    public $activation_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($activation_code, $activation_id)
    {
        $this->activation_code = $activation_code;
        $this->activation_id = $activation_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $app_name = env('APP_NAME');
        $email = 'contact@chat-app.com';
        $message = 'Thank you for registering with us. You are now part of a great community';
        $url = url("/account/verify/" . $this->activation_code . "/" . $this->activation_id);

        return $this->from($email, $app_name)->subject('Confirm Email Registration')->view('emails.auth.registration')->with([
            'app_name' => $app_name,
            'messages' => $message,
            'url' => $url,
        ]);
    }
}
