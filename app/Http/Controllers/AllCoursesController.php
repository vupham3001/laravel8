<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function index()
    {
        $tags = Tag::all();
        $courses = Course::all();
        $course = DB::table('courses')->Paginate(6);

        return view('all-courses', ['courses' => $courses, 'courses'=>$course]);
    }

    public function coursesSearch(Request $request)
    {
        $key = $request->key;
        $courses = Course::where('title', 'like', "%$key%")
                        ->orWhere('introduction', 'like', "%$key%")->take(15)->paginate(3);

        return view('all-courses', ['courses' => $courses, 'key' => $key]);
    }
}
