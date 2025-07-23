<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS Template -->
    <link rel="icon" href="{{ asset('assets/elearning-1.0.0/img/favicon.ico') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/elearning-1.0.0/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/elearning-1.0.0/css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-2"></i>Library App</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end px-4" id="adminNavbar">
            @auth
                <span class="navbar-text fw-bold me-3">Admin</span>

                

                <form action="{{ route('logout') }}" method="POST" class="d-none d-lg-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        Logout <i class="fa fa-arrow-right ms-2"></i>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Logout</a>
            @endauth
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- JS Template -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/elearning-1.0.0/js/main.js') }}"></script>
</body>
</html>
