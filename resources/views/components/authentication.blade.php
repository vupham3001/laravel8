<div class="modal fade" id="loginRegisterModal">
    <div class="modal-dialog">
        <div class="modal-content login-register">

            <div class="title-login-register">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a id="tablogin" class="tablogin nav-link active" data-toggle="tab" href="#login">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a id="tabregister" class="tabregister nav-link" data-toggle="tab" href="#register">REGISTER</a>
                    </li>
                    <button type="button" class="close button-close" data-dismiss="modal" aria-label="Close">
                        <img src="./assets/img/button-close.png" alt="button-close">
                    </button>
                </ul>

                <div class="tab-content">
                    <form action="{{route('login')}}" method="post" id="login" class="container tab-pane active body-login"><br>
                        @csrf
                        <div class="form-username">
                            <label for="username" class="col-md-4 col-form-label text-md-right form-group user-name">{{ ('Username') }}</label>
                            <input class="form-control box-user-name @error('username') is-invalid @enderror" type="text" name="username" id="username" value="{{ old('username') }}">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-password">
                            <label for="password" class="form-group password">{{ __('Password') }}</label>
                            <input class="form-control box-password @error('password') is-invalid @enderror" type="password" name="password" id="password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember-me" id="remember-me">
                            <label for="remember-me" class="form-check-label" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
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
                    </form>

                    <form method="post" action="{{route('register')}}" id="register" class="container tab-pane fade body-register"><br>
                        @csrf
                        <div class="form-username">
                            <label for="name" class="form-group user-name">{{ __('Name') }}</label>
                            <input class="form-control box-user-name @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" name="name" id="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-email">
                            <label for="email" class="form-group email">{{ __('E-Mail Address') }}</label>
                            <input class="form-control box-email @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-password">
                            <label for="password" class="form-group password">{{ __('Password') }}</label>
                            <input class="form-control box-password @error('password') is-invalid @enderror" type="password" name="password" id="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-repeat-password">
                            <label for="password-confirm" class="form-group repeat-password">{{ __('Confirm Password') }}</label>
                            <input class="form-control box-repeat-password @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" id="password-confirm">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <button class="btn btn-register">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
