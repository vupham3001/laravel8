<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->input();
        $tags = Tag::all();
        $courses = Course::filter($data)->paginate(config('config.paginate'));
        $teachers = User::teachers()->get();
        return view('courses.index', compact('courses', 'tags', 'teachers'));
    }
}
