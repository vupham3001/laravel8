<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'courses';

    protected $fillable = [
        'title',
        'logo_path',
        'introduction',
        'description',
        'learn_time',
        'quizzes',
        'price',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_users', 'course_id', 'user_id');
    }

    public function getNumberUsersAttribute()
    {
        return $this->users()->where('role', config('config.role.student'))->count();
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id');
    }

    public function getNumberLessonsAttribute()
    {
        return $this->lessons()->count();
    }

    public function getTotalTimesAttribute()
    {
        return $this->lessons()->sum('learn_time');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'target_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'course_tags', 'course_id', 'tag_id');
    }

    public function scopeFilter($query, $data)
    {
        if (isset($data['key'])) {
            $query = $query->where('title', 'like', '%'.$data['key'].'%')
                  ->orWhere('introduction', 'like', '%'.$data['key'].'%');
        }

        if (isset($data['status'])) {
            if ($data['status'] == config('config.option.newest')) {
                $query = $query->orderByDesc('id');
            } elseif ($data['status'] == config('config.option.oldest')) {
                $query = $query->orderBy('id');
            }
        }

        if (isset($data['teacher'])) {
            $query = $query->whereHas('users', function ($subquery) use ($data) {
                $subquery->where('user_id', $data['teacher']);
            });
        }

        if (isset($data['learn_number'])) {
            $query = $query->withCount(['users as users_count' => function ($subquery) {
                $subquery->groupBy('course_id');
            }])->orderBy('users_count', $data['learn_number']);
        }

        if (isset($data['learn_times'])) {
            $query = $query->withSum('lessons', 'learn_time', function ($subquery) {
                $subquery->groupBy('course_id');
            })->orderBy('lessons_sum_learn_time', $data['learn_times']);
        }

        if (isset($data['number_lesson'])) {
            $query = $query->withCount(['lessons as lessons_count' => function ($subquery) {
                $subquery->groupBy('course_id');
            }])->orderBy('lessons_count', $data['number_lesson']);
        }

        if (isset($data['tag'])) {
            $query->whereHas('tags', function ($subquery) use ($data) {
                $subquery->where('tag_id', $data['tag']);
            });
        }

        return $query;
    }
}
