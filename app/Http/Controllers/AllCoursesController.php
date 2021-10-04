<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class AllCoursesController extends Controller
{
    public function create($data)
    {
        return Course::create([
            'title' => $data['title'],
            'logo_path' => $data['logo_path'],
            'description' => $data['description'],
            'introducation' => $data['introduction'],
            'learn_time' => $data['learn_time'],
            'quizzes' => $data['quizzes'],
            'price' => $data['price'],
        ]);
    }

    public function index(Request $request)
    {
        $data = $request->input();

        $tags = Tag::all();

        $courses = Course::filter($data)->paginate(10);

        $teachers = User::teachers()->get();

        return view('all-courses', compact('courses', 'tags', 'teachers'));
    }
}
