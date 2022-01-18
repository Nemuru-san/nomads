<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- link style google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- link style css -->
    <link rel="stylesheet" href="css/main.css">

    <title>BWAFWD - NoMADs</title>
</head>

<body>

    <!-- navbar section -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logo_nomads.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <!-- header section -->
    <header class="text-center">
        <h1>
            Explore the beautiful world
            <br> as easy one click

        </h1>
        <p class="mt-3">
            you will see beautiful
            <br> moment you never see before
        </p>
        <a href="" class="btn btn-get-started px-4 mt-4">
            get started
        </a>
    </header>
    <!-- end -->

    <!-- main section -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center">
                <div class="col-3 col-md-2 stat-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stat-detail">
                    <h2>12</h2>
                    <p>coutries</p>
                </div>
                <div class="col-3 col-md-2 stat-detail">
                    <h2>3K</h2>
                    <p>hotels</p>
                </div>
                <div class="col-3 col-md-2 stat-detail">
                    <h2>72</h2>
                    <p>Hotels</p>
                </div>
            </section>
        </div>

        <section class="section-popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata popular</h2>
                        <p>
                            something that you never try
                            <br> before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <section class="popular-content">
                <div class="container">
                    <div class="popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column" style="            background-image: url(../img/pop1.jpg);">
                                <div class="travel-country">
                                    indonesia
                                </div>
                                <div class="travel-location">
                                    pulau dewata
                                </div>
                                <div class="travel-button mt-auto">
                                    <a href="detail.html" class="btn btn-travel-detail px-4">
                                        view details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column" style="            background-image: url(../img/pop1.jpg);">
                                <div class="travel-country">
                                    indonesia
                                </div>
                                <div class="travel-location">
                                    pulau dewata
                                </div>
                                <div class="travel-button mt-auto">
                                    <a href="" class="btn btn-travel-detail px-4">
                                        view details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column" style="            background-image: url(../img/pop2.jpg);">
                                <div class="travel-country">
                                    indonesia
                                </div>
                                <div class="travel-location">
                                    pulau dewata
                                </div>
                                <div class="travel-button mt-auto">
                                    <a href="" class="btn btn-travel-detail px-4">
                                        view details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column" style="            background-image: url(../img/pop3.jpg);">
                                <div class="travel-country">
                                    indonesia
                                </div>
                                <div class="travel-location">
                                    pulau dewata
                                </div>
                                <div class="travel-button mt-auto">
                                    <a href="" class="btn btn-travel-detail px-4">
                                        view details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="network">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Partners</h2>
                        <p>companies are trusted us
                            <br> more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center" data-aos="flip-up" data-aos-duration="1500">
                        <img src="img/partner.png" alt="logo partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-header">
            <div class="container">
                <div class="col">
                    <div class="text-center">
                        <h2>They are loving US</h2>
                        <p>
                            moments were giving them
                            <br> the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section testimonial-content">
            <div class="container" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="popular-content row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="content-value">
                                <img src="img/foto-profile.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">
                                    Lorem
                                </h3>
                                <p class="testimonial-text">
                                    " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, perferendis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quia molestias temporibus! reprehenderit deserunt ratione! Excepturi vero reprehenderit fugiat. "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Isekai
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="content-value">
                                <img src="img/foto-profile.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">
                                    Lorem
                                </h3>
                                <p class="testimonial-text">
                                    " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, perferendis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quia molestias temporibus! reprehenderit deserunt ratione! Excepturi vero reprehenderit fugiat. "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Isekai
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="content-value">
                                <img src="img/foto-profile.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">
                                    Lorem
                                </h3>
                                <p class="testimonial-text">
                                    " Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, perferendis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro quia molestias temporibus! reprehenderit deserunt ratione! Excepturi vero reprehenderit fugiat. "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Isekai
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="" class="btn btn-help px-5 mt-4 mx-2 py-3">
                                Help me pls!!
                            </a>

                            <a href="" class="btn btn-started px-5 mt-4 mx-2 py-3">
                                get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- end -->

    <!-- footer -->
    <footer class="footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-contetn-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURED</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">Review</a>
                                </li>
                                <li>
                                    <a href="">Comunity</a>
                                </li>
                                <li>
                                    <a href="">social media link</a>
                                </li>
                                <li>
                                    <a href="">affliate</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>FEATURED</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">Review</a>
                                </li>
                                <li>
                                    <a href="">Comunity</a>
                                </li>
                                <li>
                                    <a href="">social media link</a>
                                </li>
                                <li>
                                    <a href="">affliate</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>FEATURED</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">Review</a>
                                </li>
                                <li>
                                    <a href="">Comunity</a>
                                </li>
                                <li>
                                    <a href="">social media link</a>
                                </li>
                                <li>
                                    <a href="">affliate</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>FEATURED</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="">Review</a>
                                </li>
                                <li>
                                    <a href="">Comunity</a>
                                </li>
                                <li>
                                    <a href="">social media link</a>
                                </li>
                                <li>
                                    <a href="">affliate</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2019 Copyright Nomads • All rights reserved • Made in Jakarta
                </div>
            </div>
        </div>
    </footer>
    <!-- end -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <!-- retina js -->
    <script src="js/retinaJs/retina.min.js"></script>

    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
