<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\home;
use App\Models\employee;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function home()
    {
        return $this->hasMany('App\Models\home','user_id','id');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\employee','user_id','id');
    }


    public function isSuperAdmin(){
        return true;
    }

    public function messages()
    {
        return $this->hasMany(message::class);
    }

}
