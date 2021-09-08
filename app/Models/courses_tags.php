<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses_tags extends Model
{
    use HasFactory;

    protected $table = "courses_tags";

    protected $fillable = [
        'id',
        'tag_id',
        'courses_id',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
