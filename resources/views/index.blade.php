@extends('layout.app')

@section('title', 'Courses')

@section('content')
<div class="all-courses" id="all-courses">
        <div class="container">
            <div class="search d-flex">
                <form class="form-inline">
                    <a class="btn btn-filter" id="btnFilter" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-sliders-h"></i>
                        <span>Filter</span>
                    </a>
                    <input class="search-input" type="text" name="key" placeholder="Search...">
                    <label for="pwd"><i class="fas fa-search"></i></label>
                    <input class="btn-search" type="submit" value="Tìm kiếm">
                    <div class="colapse d-none" id="colapseExample">
                        <div class="d-flex colapse-filter">
                            <div class="colapse-title">
                                <span>Lọc theo</span>
                            </div>
                            <div class="filter-select">
                                <div class="top-line d-flex">
                                    <div class="form-check">
                                        <input type="submit" class="form-check-input" id="new" value="Mới nhất" checked>
                                        <label for="new"></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="submit" class="form-check-input" id="old" value="Cũ nhất" checked>
                                        <label for="old"></label>
                                    </div>
                                    <select class="teacher" name="teacher" id="teacher">
                                        <option value="teacher">Teacher</option>
                                    </select>
                                    <select class="learn-number" name="learn-number" id="learn-number">
                                        <option value="learn-number">Số người học</option>
                                    </select>
                                    <select class="learn-time" name="learn-time" id="learn-time">
                                        <option value="learn-time">Số giờ học</option>
                                    </select>
                                    <select class="number-lesson" name="number-lesson" id="number-lesson">
                                        <option value="">Số bài học</option>
                                        <option value="">Tăng dần</option>
                                        <option value="">Giảm dần</option>
                                    </select>
                                </div>
                                <div class="bot-line d-flex">
                                    <select class="tags" name="tags" id="tags">
                                        <option value="">Tags</option>
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
                    <div class="col-sm-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img class="list-courses-img" src="./assets/img/Ellipse 10.png" alt="list-courses-img">
                                    <div class="">
                                        <div class="list-courses-title">HTML Fundamentals</div>
                                        <div class="list-courses-intro">Practice during lessons, practice between lessons,
                                            practice whenever you can. Master the task, then reinforce and test your knowledge
                                            with fun, hands-on exercises and interactive quizzes.
                                        </div>
                                    </div>
                                </div>
                                <input class="btn-list-courses" type="submit" value="More">
                                <div class="row d-flex justify-content-center align-items-center list-courses-statistic">
                                    <div class="col-sm-4">
                                        <div class="name-statistic">Learners</div>
                                        <div class="quantity-statistic">1568</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="name-statistic">Lessons</div>
                                        <div class="quantity-statistic">2689</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="name-statistic">Times</div>
                                        <div class="quantity-statistic">100h</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
