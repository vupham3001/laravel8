@extends('layouts.app')

@section('title', 'HapoLearn')

@section('content')
    <!-- body -->
    <div id="body" class="container-fluid p-0 position-relative body">
        <div class="container-fluid d-flex align-items-center background-hapolearn-banner">
            <div class="container pl-lg-4 d-flex flex-column p-0 content-of-hapolearn-banner">
                <span class="content-hapolearn-title">Learn Anytime, Anywhere</span>
                <span class="content-hapolearn-subtitle">at HapoLearn
                    <img class="hapo-logo" src="./assets/img/hapo_logo.png" alt="logohapo"> !
                </span>
                <span class="content-hapolearn">Interactive lesson, "on-the-go"<br>practice, peer support.</span>
                <a href="#" class="mt-2 button-hapolearn">Start Learning Now!</a>
            </div>
        </div>

        <!-- main courses -->
        <div class="container justify-content-center main-courses">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card courses-boder">
                        <div class="d-flex justify-content-center align-items-center card-img-top html-css-js">
                            <img src="./assets/img/html-css-js.png" alt="html tutorial">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HTML/CSS/js Tutorial</h5>
                            <p class="card-text">I knew hardly anything about HTML, JS, and CSS before
                                entering New Media. I had coded quite a bit,
                                but never touched anything in regards to web development.
                            </p>
                            <a href="#" class="btn btn-card-primary">Take This Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card courses-boder">
                        <div class="d-flex justify-content-center align-items-center card-img-top lavarel">
                            <img src="./assets/img/img2-courses.png" alt="lavarel tutorial">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">LARAVEL Tutorial</h5>
                            <p class="card-text">I knew hardly anything about HTML, JS, and CSS before
                                entering New Media. I had coded quite a bit,
                                but never touched anything in regards to web development.
                            </p>
                            <a href="#" class="btn btn-card-primary">Take This Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card courses-boder">
                        <div class="d-flex justify-content-center align-items-center card-img-top img-php">
                            <img src="./assets/img/php.png" alt="php tutorial">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">PHP Tutorial</h5>
                            <p class="card-text">I knew hardly anything about HTML, JS, and CSS before
                                entering New Media. I had coded quite a bit,
                                but never touched anything in regards to web development.
                            </p>
                            <a href="#" class="btn btn-card-primary">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other courses -->
            <div class="other-courses justify-conten-center">
                <span class="courses">Other courses</span>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card courses-boder">
                        <div class="d-flex justify-content-center align-items-center card-img-top css-tutorial">
                            <img src="./assets/img/css_course.png" alt="CSS tutorial">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">CSS Tutorial</h5>
                            <p class="card-text-overflow">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                            <a href="#" class="btn btn-card-primary">Take This Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card courses-boder">
                        <div class="d-flex justify-content-center align-items-center card-img-top rails-courses">
                            <img src="./assets/img/rails_course.png" alt="Rails-courses">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ruby on rails Tutorial</h5>
                            <p class="card-text-overflow">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                            <a href="#" class="btn btn-card-primary">Take This Course</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card courses-boder">
                        <div class="d-flex justify-content-center align-items-center card-img-top java-courses">
                            <img src="./assets/img/java.png" alt="Java-courses">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Java Tutorial</h5>
                            <p class="card-text-overflow">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                            <a href="#" class="btn btn-card-primary">Take This Course</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row extend-courses justify-content-center">
                <span>View All Our Courses <img class="right-arrow" src="./assets/img/right_arrow.png" alt="extend"></span>
            </div>
        </div>

        <!-- why hapolearn-->
        <div class="container-fluid why-hapolearn">
            <div class="background-whyhapolearn d-flex">
                <img class="img-laptop" src="./assets/img/mb1.png" alt="laptop">
                <div class="col-6 banner-whyhapo-answer">
                    <p class="content-whyhapo-title">Why HapoLearn?</p>
                    <div class="content-whyhapo">
                        <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice, peer support.</p>
                        <p><i class="fas fa-check-circle"></i> Interactive lessons, "on-the-go" practice, peer support.</p>
                    </div>
                </div>
                <div class="col-6 laptop-and-mobie"></div>
            </div>
        </div>

        <!-- feedback -->
        <div class="container feedback">
            <div class="row title-underline justify-content-center">
                <span class="custom-underline-textcourse">Feedback</span>
            </div>
            <div class="feedback-intro">What other students turned professionals have to say about us after learning with us and reaching their goals</div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class=" mt-lg-4 mt-md-2 carousel-inner feedback-slide mt-0">
                    <div class="carousel-item active">
                        <div class="container mt-5">
                            <div class="d-flex row ml-auto mr-auto">
                                <div class="mt-2 m-0 p-0 feedback-border-text ">
                                    <p class="feedback-text">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”</p>
                                </div>
                                <div class="d-flex flex-row user-info">
                                    <img class="rounded-circle" src="./assets/img/avatar.jpg">
                                    <div class="d-flex flex-column justify-content-start ml-2">
                                        <span class="d-block font-weight-bold user-name">Hoang Anh Nguyen</span>
                                        <span class="user-role text-black-50">PHP</span>
                                        <div class="user-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container mt-5">
                            <div class="d-flex row ml-auto mr-auto">
                                <div class="mt-2 m-0 p-0 feedback-border-text ">
                                    <p class="feedback-text">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”</p>
                                </div>
                                <div class="d-flex flex-row user-info">
                                    <img class="rounded-circle" src="./assets/img/avatar.jpg">
                                    <div class="d-flex flex-column justify-content-start ml-2">
                                        <span class="d-block font-weight-bold user-name">Vu Pham Truong</span>
                                        <span class="user-role text-black-50">Python</span>
                                        <div class="user-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container mt-5">
                            <div class="d-flex row ml-auto mr-auto">
                                <div class="mt-2 m-0 p-0 feedback-border-text ">
                                    <p class="feedback-text">“A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”</p>
                                </div>
                                <div class="d-flex flex-row user-info">
                                    <img class="rounded-circle" src="./assets/img/avatar.jpg">
                                    <div class="d-flex flex-column justify-content-start ml-2">
                                        <span class="d-block font-weight-bold user-name">Huy Pham Van</span>
                                        <span class="user-role text-black-50">C++</span>
                                        <div class="user-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--banner become-->
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center background-banner-become">
            <div class="content-become">Become a member of our
                growing community!
            </div>
            <a href="#" class="btn button-become">Start Learning Now!</a>
        </div>

        <!-- static -->
        <div class="container-fluid d-flex flex-column align-items-center static">
            <span class="title-static">Statistic</span>
            <div class="container row statistical">
                <div class="col-sm-4 d-flex flex-column courses-static">
                    <span class="information">Courses</span>
                    <span class="quantity">1,568</span>
                </div>
                <div class="col-sm-4 d-flex flex-column lessons-static">
                    <span class="information">Lessons</span>
                    <span class="quantity">2,689</span>
                </div>
                <div class="col-sm-4 d-flex flex-column learners-static">
                    <span class="information">Learners</span>
                    <span class="quantity">16,882</span>
                </div>
            </div>
        </div>

    </div>
@endsection
