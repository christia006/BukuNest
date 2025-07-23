<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
           
                <a class="btn btn-link" href="{{ url('/books') }}">Books</a>
                <a class="btn btn-link" href="{{ url('/genres') }}">Genres</a>
              
                @auth
                    <a class="btn btn-link" href="{{ route('profile.edit') }}">Profile</a>
                @endauth
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Medan </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+838 2175 1692</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>@christianjhutahaean</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <div class="col-6">
                        <img class="img-fluid bg-light p-1" src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?fit=crop&w=200&h=200" alt="Book 1">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid bg-light p-1" src="https://images.unsplash.com/photo-1512820790803-83ca734da794?fit=crop&w=200&h=200" alt="Book 2">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid bg-light p-1" src="https://images.unsplash.com/photo-1532012197267-da84d127e765?fit=crop&w=200&h=200" alt="Book 3">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid bg-light p-1" src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?fit=crop&w=200&h=200" alt="Book 4">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Daftar newsletter kami untuk update buku, genre, dan fitur terbaru Library App.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ url('/') }}">Library App</a>, All Rights Reserved.
                    <br>Built with Laravel & Bootstrap.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/contact') }}">Contact</a>
                        <a href="#">Help</a>
                        <a href="#">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
