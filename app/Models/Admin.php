<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Admin extends Authenticatable implements AuthenticatableContract, AuthorizableContract
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    public function isAdmin()
{
    return $this->email === 'admin@example.com';
}

}
