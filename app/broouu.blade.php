$table->id();
$table->string('name');
$table->string('email')->unique();
$table->string('telephone')->nullable();
$table->string('password')->nullable();
$table->string('Role')->nullable();
$table->string('codeAcces')->nullable();
$table->string('filiere')->nullable();
$table->string('droit')->nullable();
$table->string('mois1')->nullable();
$table->string('mois2')->nullable();
$table->string('mois3')->nullable();
$table->string('mois4')->nullable();
$table->string('mois5')->nullable();
$table->string('image')->nullable();
$table->string('google_id')->nullable();
$table->string('fb_id')->nullable();
$table->rememberToken();
$table->timestamps();







<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use laravel\Fortify\TwoFactorAuthenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // use  HasRoles,TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'Role',
        'image',
        
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
    
    
}


