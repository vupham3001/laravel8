@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="all-courses" id="all-courses">
        <div class="container">
            <div class="search d-flex">
                <form class="form-inline" method="GET" action="{{ route('search') }}">
                    <a class="btn btn-filter" id="btnFilter" data-toggle="collapse" href="#" role="button" aria-expanded="false">
                        <i class="fas fa-sliders-h"></i>
                        <span>Filter</span>
                    </a>
                    <input class="search-input" type="text" name="key" placeholder="Search...">
                    <label for="pwd"><i class="fas fa-search"></i></label>
                    <input class="btn-search" type="submit" value="Search">
                    <div class="colapse d-none" id="">
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
                                        <option class="" value="{{ $teacher->id }}" {{ request('teacher') == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                    <select class="learn-number" name="learn_number" id="learn-number">
                                        <option value="">Number Learners</option>
                                        <option value="{{ config('config.option.asc') }}"{{ request('learn_number') == config('config.option.asc') ? 'selected' : '' }}>ascending</option>
                                        <option value="{{ config('config.option.desc') }}" {{ request('learn_number') == config('config.option.desc') ? 'selected' : '' }}>decrease</option>
                                    </select>
                                    <select class="learn-time" name="learn_times" id="Learn_time">
                                        <option value="">Number Times</option>
                                        <option value="{{ config('config.option.asc') }}" {{ request('learn_times') == config('config.option.asc') ? 'selected' : '' }}>ascending</option>
                                        <option value="{{ config('config.option.desc') }}"{{ request('learn_times') == config('config.option.desc') ? 'selected' : '' }}>decrease</option>
                                    </select>
                                    <select class="number-lesson" name="number_lesson" id="number-lesson">
                                        <option value="">Number Lessons</option>
                                        <option value="{{ config('config.option.asc') }}" {{ request('numbber_lesson') == config('config.option.asc') ? 'selected' : '' }}>ascending</option>
                                        <option value="{{ config('config.option.desc') }}" {{ request('numbber_lesson') == config('config.option.desc') ? 'selected' : '' }}>decrease</option>
                                    </select>
                                </div>
                                <div class="bot-line d-flex">
                                    <select class="tags" name="tag" id="tags">
                                        <option value="">Tags</option>
                                        @foreach($tags as $tag)
                                        <option class="" value="{{$tag->id}}" {{ request('tag') == $tag->id ? 'selected' : '' }}>{{ $tag->name }}</option>
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
                        @include('courses.list_course')
                    @endforeach
                </div>
            </div>
            <span>{!! $courses->appends(request()->all())->onEachSide(1)->links() !!}</span>
        </div>
    </div>
@endsection
