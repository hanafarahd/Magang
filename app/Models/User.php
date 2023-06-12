<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table='users';
    protected $fillable=[
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
    ];
    protected $guarded = [];
    protected $dates = ['created_at'];
}
