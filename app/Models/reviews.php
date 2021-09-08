<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = [
        'id',
        'target_id',
        'type',
        'content',
        'rate',
        'location',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
