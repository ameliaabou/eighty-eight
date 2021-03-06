<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use App\Notifications\MyVerificationNotification;
// use Illuminate\Auth\Events\Registered;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

//TODO: email verification, add to line 12
class User extends Authenticatable // implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function handle(Registered $event)
    // {
    //     if ($event->user instanceof MustVerifyEmail && ! $event->user->hasVerifiedEmail()) {
    //         $event->user->sendEmailVerificationNotification();
    //     }
    // }
}
