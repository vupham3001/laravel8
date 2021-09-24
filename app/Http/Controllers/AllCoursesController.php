<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AllCoursesController extends Controller
{
    public function index()
    {
        return view('all-courses');
    }
}
