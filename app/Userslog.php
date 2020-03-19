<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userslog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'username', 'password', 'roles'

    ];

    protected $hidden = [];

    public function users()
    {
        return $this->hasMany(User::class, 'id', 'id');
    }
}
