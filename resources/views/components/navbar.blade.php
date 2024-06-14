<nav class="navbar bg-body-tertiary fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://www.svgrepo.com/show/484543/data.svg" alt="Logo" width="30" height="24"
                class="d-inline-block align-text-top">
            Network Service Desk
        </a>

        <div class="navbar-nav me-auto">
            <div class="d-flex justify-content-center align-items-center nav-item">
                <a href="{{route('monitoring')}}" class="nav-link text-decoration-none me-2">Monitoring</a>
                <a href="{{route('contact.me')}}" class="nav-link text-decoration-none mx-2">Contact Me</a>
                <a href="{{route('about.me')}}" class="nav-link text-decoration-none mx-2">About Me</a>
            </div>

        </div>


        @guest
            <a href="{{ route('login') }}" class="btn btn-danger me-4">
                <i class="fa-solid fa-right-to-bracket me-1"></i>
                <span class="text-uppercase">Login</span>
            </a>
        @endguest

        @auth
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle text-uppercase" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{route('insert.train')}}">Insert Train</a></li>
                    <li><a class="dropdown-item" href="#">Work in progress</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button class="dropdown-item text-warning">Logout</button>
                        </form>
                    </li>

                </ul>
            </div>
        @endauth
    </div>
</nav>
