<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HapoLearn</title>
    <link  rel="shortcut icon" href="./assets/img/hapo_logo.png" type="image/png" />
    <!-- import bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--import slick-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body>
    <!-- header -->
    @include('admin.header')
    <!-- /header -->

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

    <!-- footer -->
    @include('admin.footer')
    <!-- /footer -->

    <!-- login/register-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content login-register">

                <div class="title-login-register">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#login">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#register">REGISTER</a>
                        </li>
                        <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                            <img src="./assets/img/button-close.png" alt="button-close">
                        </button>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="login" class="container tab-pane active body-login"><br>
                            <div class="form-username">
                                <label class="form-group user-name"> Username:</label>
                                <input class="form-control box-user-name" type="text" name="username" id="username">
                            </div>
                            <div class="form-password">
                                <label class="form-group password">Password:</label>
                                <input class="form-control box-password" type="password" name="password" id="password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember-me" id="remember-me">
                                <label for="remember-me" class="form-check-label">Remember me</label>
                                <a class="forgot-pass" href="#">Forgot password</a>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <button class="btn btn-primary btn-login">LOGIN</button>
                                <p class="login-with-btn">Login with</p>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center google">
                                <p>
                                    <a href="#"><i class="fab fa-google-plus-g google-icon"></i></a> Google
                                </p>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center facebook">
                                <p>
                                    <a href="#"><i class="fab fa-facebook-f facebook-icon"></i></a> Facebook
                                </p>
                            </div>
                        </div>

                        <div id="register" class="container tab-pane fade body-register"><br>
                            <div class="form-username">
                                <label class="form-group user-name"> Username:</label>
                                <input class="form-control box-user-name" type="text" name="username" id="username">
                            </div>
                            <div class="form-email">
                                <label class="form-group email"> Email:</label>
                                <input class="form-control box-email" type="text" name="email" id="email">
                            </div>
                            <div class="form-password">
                                <label class="form-group password"> Password:</label>
                                <input class="form-control box-password" type="password" name="password" id="password">
                            </div>
                            <div class="form-repeat-password">
                                <label class="form-group repeat-password"> Repeat Password:</label>
                                <input class="form-control box-repeat-password" type="password" name="repeat-password" id="repeat-password">
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <button class="btn btn-register">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--chatbox-->
    <div class="messenger">
        <div id="messenger" class="chatbox chatbox-appear">
            <div class="close-chatbox d-flex justify-content-center align-items-center"><i class="fas fa-times"></i></div>
            <div class="title-chatbox">HapoLearn</div>
            <div class="d-flex chatbox-form">
                <img class="logo-chatbox" src="./assets/img/logo-chatbox.png" alt="logo-chatbox">
                <div class="text-chatbox">HapoLearn xin chào bạn.<br>
                    Bạn có cần chúng tôi hỗ trợ gì không?
                </div>
            </div>
            <button class="btn btn-primary d-flex justify-content-center login-messenger">
                <i class="fab fa-facebook-messenger custom-icon-facebook-messenger mr-2 mt-1"></i> Đăng nhập vào Messenger
            </button>
            <div class="chatbox-end">Chat với HapoLearn trong Messenger</div>
        </div>
        <img class="logo-messenger" src="./assets/img/messenger.png" alt="logo-messenger">
    </div>

    <section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="./js/index.js"></script>
    </section>
</body>
</html>
