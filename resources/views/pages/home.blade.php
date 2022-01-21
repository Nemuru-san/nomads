@extends('layout.app')

@section('title')
    NOMADS
@endsection

@section('content')

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
                                <div class="card-travel text-center d-flex flex-column" style="            background-image: url(frontend/img/pop1.jpg);">
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
                                <div class="card-travel text-center d-flex flex-column" style="            background-image: url(frontend/img/pop1.jpg);">
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
                                <div class="card-travel text-center d-flex flex-column" style="            background-image: url(frontend/img/pop2.jpg);">
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
                                <div class="card-travel text-center d-flex flex-column" style="            background-image: url(frontend/img/pop3.jpg);">
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
                            <img src="frontend/img/partner.png" alt="logo partner" class="img-partner">
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
                                    <img src="frontend/img/foto-profile.png" alt="" class="mb-4 rounded-circle">
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
                                    <img src="frontend/img/foto-profile.png" alt="" class="mb-4 rounded-circle">
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
                                    <img src="frontend/img/foto-profile.png" alt="" class="mb-4 rounded-circle">
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

@endsection
