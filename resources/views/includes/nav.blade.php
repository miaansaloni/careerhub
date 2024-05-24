<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">CareerHub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">JOB OFFERS</a></li>
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">ABOUT US</a></li>

                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('posts.create') }}">POST A JOB OFFER</a></li>
                @endauth

            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">PROFILE</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item">LOGOUT</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        EMPLOYERS' SECTION
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">LOG IN</a></li>
                        <li ><a href="{{ route('register') }}" class="dropdown-item">REGISTER</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
