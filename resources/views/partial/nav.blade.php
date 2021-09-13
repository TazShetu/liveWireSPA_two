<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @auth
                                <li>{{Auth::user()->name}}</li>
                                <li><a href="{{route('dashboard')}}" class="dropdown-item">Home</a></li>
                                <li><a href="{{route('dashboard2')}}" class="dropdown-item">Home2</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="dropdown-item">
                                    <a href="{{route('logout')}}"
                                       onclick="return confirm('Are you sure you want to log out ?')" class="dropdown-item">
                                        Logout
                                    </a>
                                </li>
                            @else
                                <li><a href="{{route('login')}}" class="dropdown-item">Login</a></li>
                                <li><a href="{{route('register')}}" class="dropdown-item">Register</a></li>
                                <li><a href="{{route('init')}}" class="dropdown-item">W</a></li>
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

