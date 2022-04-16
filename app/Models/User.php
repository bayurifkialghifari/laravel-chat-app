<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatables;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatables
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'user_code';
    public $incrementing = false;
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->user_password;
    }

    public function getAuthIdentifierName()
    {
        return 'user_code';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_code',
        'user_name',
        'user_email',
        'user_password',
        'user_phone',
        'user_nickname',
        'user_bio',
        'user_profile',
        'is_active',
        'activation_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_password', 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
