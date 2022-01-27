    <!-- navbar section -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ url('frontend/img/logo_nomads.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-3">
                        <li class="nav-item mx-md-2">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a class="nav-link" href="#">Paket Travel</a>
                        </li>
                        <li class="nav-item dropdown mx-md-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Service
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a class="nav-link" href="#">Testimonial</a>
                        </li>
                    </ul>
                    <!-- mobile version -->
                    <form action="" class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0 px-4">
                            Login
                        </button>
                    </form>

                    <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                            Login
                        </button>
                    </form>

                    <!-- <form class="d-flex">
                        <button class="btn btn-outline-success my-2 my-sm-0 px-4" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </div>
    <!-- end -->
