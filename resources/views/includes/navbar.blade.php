<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{url('/')}}" class="navbar-brand p-0">
                    <h1 class="m-0">BizConsult</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ url('/') }}" id="navbarLink" class="nav-item nav-link">Home</a>
                        <a href="{{ url('about') }}" id="navbarLink" class="nav-item nav-link">About</a>
                        <a href="{{ url('service') }}" id="navbarLink" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" id="navbarLink" class="dropdown-item">Features</a>
                                <a href="quote.html" id="navbarLink" class="dropdown-item">Free Quote</a>
                                <a href="team.html" id="navbarLink" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" id="navbarLink" class="dropdown-item">Testimonial</a>
                                <a href="404.html" id="navbarLink" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="{{ url('contact') }}" id="navbarLink" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Free Quote</a>
                </div>
            </nav>
