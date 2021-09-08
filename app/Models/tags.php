<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;

    protected $table = "tags";

    protected $fillable = [
        'id',
        'name',
        'deleted_at',
        'update_at',
        'created_at',
    ];
}
