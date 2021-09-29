<header class="container-fluid header">
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="header-logo navbar-branch" href="#">
                <img src="./assets/img/Hapolearn_header.png" alt="HapoLearn">
            </a>
            <div class="collapse navbar-collapse ml-auto" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link nav-link-active active" href="">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="">ALL COURSE</a></li>
                    @guest
                        @if (Route::has('login') || Route::has('register'))
                        <li class="nav-item"><a class="nav-link header-nav" href="{{ route('login') }}" data-toggle="modal" data-target="#loginRegisterModal">LOGIN/REGISTER</a></li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item"><a class="nav-link" href="">PROFILE</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
