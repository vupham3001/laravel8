<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses_users extends Model
{
    use HasFactory;

    protected $table = "courses_users";

    protected $fillable = [
        'id',
        'course_id',
        'user_id',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
