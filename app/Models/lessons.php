<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    use HasFactory;

    protected $table = "lessons";

    protected $fillable = [
        'id',
        'course_id',
        'title',
        'learn_time',
        'description',
        'requiments',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
