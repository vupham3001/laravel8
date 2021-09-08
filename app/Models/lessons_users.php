<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons_users extends Model
{
    use HasFactory;

    protected $table = "lessons_users";

    protected $fillable = [
        'id',
        'lesson_id',
        'user_id',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
