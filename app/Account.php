<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    protected $fillable = [
    	'username',
    	'password',
    	'role',
    ];
}
