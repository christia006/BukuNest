<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library App - @yield('title')</title>

    <link rel="icon" href="{{ asset('assets/elearning-1.0.0/img/favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{ asset('assets/elearning-1.0.0/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/elearning-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Bootstrap & Custom CSS -->
    <link href="{{ asset('assets/elearning-1.0.0/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/elearning-1.0.0/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed w-100 vh-100 top-50 start-50 translate-middle d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('layouts.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Vendor JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/elearning-1.0.0/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('assets/elearning-1.0.0/js/main.js') }}"></script>
</body>
</html>
