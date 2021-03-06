<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
 
    protected $fillable = ['name', 'email', 'phone', 'status', 'password']; 
 
    protected $hidden = [
        'password',
        'remember_token',
    ];
 
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

 
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
}
