<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    protected $table = "courses";

    protected $fillable = [
        'id',
        'title',
        'logo_path',
        'introduction',
        'description',
        'learn_time',
        'quizzes',
        'price',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
