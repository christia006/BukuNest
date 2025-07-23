<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Library App</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ Auth::check() ? url('/dashboard') : url('/') }}" class="nav-item nav-link {{ request()->is('/') || request()->is('dashboard') ? 'active' : '' }}">Home</a>
            <a href="{{ route('books.index') }}" class="nav-item nav-link {{ request()->is('books') ? 'active' : '' }}">Books</a>
            <a href="{{ route('genres.index') }}" class="nav-item nav-link {{ request()->is('genres') ? 'active' : '' }}">Genres</a>

            @auth
                <!-- Dropdown nama user -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">Profile</a>
                    </div>
                </div>

                <!-- Tombol logout -->
                <form action="{{ route('logout') }}" method="POST" class="d-none d-lg-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary py-4 px-lg-5">
                        Logout <i class="fa fa-arrow-right ms-3"></i>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            @endauth
        </div>
    </div>
</nav>
