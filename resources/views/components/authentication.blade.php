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