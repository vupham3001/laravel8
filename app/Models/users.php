<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'id',
        'role',
        'name',
        'email',
        'password',
        'avatar',
        'birthday',
        'address',
        'phone',
        'about_me',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
