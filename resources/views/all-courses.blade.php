@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="all-courses" id="all-courses">
        <div class="container">
            <div class="search d-flex">
                <form class="form-inline" method="GET" action="{{ route('coursesSearch') }}">

                    <a class="btn btn-filter" id="btnFilter" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-sliders-h"></i>
                        <span>Filter</span>
                    </a>
                    <input class="search-input" type="text" name="key" placeholder="Search...">
                    <label for="pwd"><i class="fas fa-search"></i></label>
                    <input class="btn-search" type="submit" value="Search">
                    <div class="colapse d-none" id="colapseExample">
                        <div class="d-flex colapse-filter">
                            <div class="colapse-title">
                                <span>FilterBy</span>
                            </div>
                            <div class="filter-select">
                                <div class="top-line d-flex">
                                    <div class="form-check">
                                        <input type="submit" class="form-check-input" name="status" value="newest {{ config('config.options.newest') }}" id="newest" checked>
                                        <label for="new"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="submit" class="form-check-input" name="status" value="oldest {{ config('config.options.oldest') }}" id="oldest" {{ request('status') == config('course.oldest') ? 'checked' : '' }}>
                                        <label for="old"></label>
                                    </div>
                                    <select class="teacher" name="teacher" id="teachersss">
                                        <option value="">Teacher</option>
                                        @foreach($teachers as $teacher)
                                        <option class="" value="{{$teacher->id}}" {{ request('teacher') == $teacher->id ? 'selected' : ''}}>{{$teacher->name}}</option>
                                        @endforeach
                                    </select>
                                    <select class="learn-number" name="learn_number" id="learn-number">
                                        <option value="">Number Learners</option>
                                        <option value="asc"{{request('learn_number') == config('config.option.asc') ? 'selected' : ''}}>ascending</option>
                                        <option value="desc" {{request('learn_number') == config('config.option.desc') ? 'selected' : ''}}>decrease</option>
                                    </select>
                                    <select class="learn-time" name="learn_times" id="Learn_time">
                                        <option value="">Number Times</option>
                                        <option value="asc" {{request('learn_times') == config('config.option.asc') ? 'selected' : ''}}>ascending</option>
                                        <option value="desc"{{request('learn_times') == config('config.option.desc') ? 'selected' : ''}}>decrease</option>
                                    </select>
                                    <select class="number-lesson" name="number_lesson" id="number-lesson">
                                        <option value="">Number Lessons</option>
                                        <option value="asc" {{request('numbber_lesson') == config('config.option.asc') ? 'selected' : ''}}>ascending</option>
                                        <option value="desc" {{request('numbber_lesson') == config('config.option.desc') ? 'selected' : ''}}>decrease</option>
                                    </select>
                                </div>
                                <div class="bot-line d-flex">
                                    <select class="tags" name="tag" id="tags">
                                        <option value="">Tags</option>
                                        @foreach($tags as $tag)
                                        <option class="" value="{{$tag->id}}" {{ request('tag') == $tag->id ? 'selected' : ''}}>{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                    <select class="review" name="review" id="review">
                                        <option value="">Review</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="list-courses">
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-sm-6">
                            <div class="card mb-5">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <img class="list-courses-img" src="{{$course->logo_path}}" alt="{{$course->title}}">
                                        <div class="">
                                            <div class="list-courses-title">{{$course->title}}</div>
                                            <div class="list-courses-intro">{{$course->introduction}}</div>
                                        </div>
                                    </div>
                                    <input class="btn-list-courses" type="submit" value="More">
                                    <div class="row d-flex justify-content-center align-items-center list-courses-statistic">
                                        <div class="col-sm-4">
                                            <div class="name-statistic">Learners</div>
                                            <div class="quantity-statistic">{{$course->number_users}}</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="name-statistic">Lessons</div>
                                            <div class="quantity-statistic">{{$course->number_lessons}}</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="name-statistic">Times</div>
                                            <div class="quantity-statistic">{{$course->total_times}} (h)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <span>{!! $courses->appends(request()->only('key'))->onEachSide(1)->links() !!}</span>
        </div>
    </div>
@endsection
