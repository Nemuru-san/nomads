@extends('layout.app')

@section('title')
    Detail Travel
@endsection

@section('content')
        <!-- detail -->
        <main>
            <section class="detail-header"></section>
            <section class="detail-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">paket travel</li>
                                    <li class="breadcrumb-item active" aria-current="page">details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-item-detail">
                                <h1>babi panggang</h1>
                                <p>pulau dewata bali</p>
                                <div class="galeri">
                                    <div class="xzoom-container">
                                        <img src="frontend/img/pic_featured.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/img/pic_featured.jpg">

                                        <!-- <img class="xzoom" id="main_image" src="img/pic_featured.jpg" xoriginal="img/pic_featured.jpg"> -->
                                    </div>

                                    <div class="xzoom-thumbs">
                                        <a href="frontend/img/pic_featured.jpg">
                                            <img src="frontend/img/pic_featured.jpg" class="xzoom-gallery" width="120" xpreview="frontend/img/pic_featured.jpg">
                                        </a>

                                        <a href="frontend/img/pic_featured.jpg">
                                            <img src="frontend/img/pic_featured.jpg" class="xzoom-gallery" width="120" xpreview="frontend/img/pic_featured.jpg">
                                        </a>

                                        <a href="img/pic_featured.jpg">
                                            <img src="frontend/img/pic_featured.jpg" class="xzoom-gallery" width="120" xpreview="frontend/img/pic_featured.jpg">
                                        </a>

                                        <a href="img/pic_featured.jpg">
                                            <img src="frontend/img/pic_featured.jpg" class="xzoom-gallery" width="120" xpreview="frontend/img/pic_featured.jpg">
                                        </a>

                                        <a href="img/pic_featured.jpg">
                                            <img src="frontend/img/pic_featured.jpg" class="xzoom-gallery" width="120" xpreview="frontend/img/pic_featured.jpg">
                                        </a>
                                    </div>
                                </div>
                                <h2>tentang wisata</h2>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here’.
                                </p>
                                <p>
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here’.
                                </p>

                                <div class="features row">
                                    <div class="col-md-4 border-end">
                                        <div class="desc">
                                            <img src="frontend/img/icon-food.png" alt="" class="features-img">
                                            <div class="desc">
                                                <h3>featured event</h3>
                                                <p>tari kecak</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-end">
                                        <div class="desc">
                                            <img src="frontend/img/icon-food.png" alt="" class="features-img">
                                            <div class="desc">
                                                <h3>featured event</h3>
                                                <p>tari kecak</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-end">
                                        <div class="desc">
                                            <img src="frontend/img/icon-food.png" alt="" class="features-img">
                                            <div class="desc">
                                                <h3>featured event</h3>
                                                <p>tari kecak</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card card-item-detail card-right">
                                <h2>member are goings</h2>
                                <div class="members my-2">
                                    <img src="frontend/img/prof1.png" alt="" class="member-image ms-2">
                                    <img src="frontend/img/prof1.png" alt="" class="member-image ms-2">
                                    <img src="frontend/img/prof1.png" alt="" class="member-image ms-2">
                                    <img src="frontend/img/prof1.png" alt="" class="member-image ms-2">
                                    <img src="frontend/img/prof.png" alt="" class="member-image ms-2">
                                </div>

                                <hr>
                                <h2>trip information</h2>
                                <table class="trip-informations">
                                    <tr>
                                        <th width="70%">date of departure</th>
                                        <td width="30%" class="text-right">
                                            22 Dec, 2030
                                        </td>
                                    </tr>

                                    <tr>
                                        <th width="70%">date of departure</th>
                                        <td width="30%" class="text-right">
                                            22 Dec, 2030
                                        </td>
                                    </tr>

                                    <tr>
                                        <th width="70%">date of departure</th>
                                        <td width="30%" class="text-right">
                                            22 Dec, 2030
                                        </td>
                                    </tr>

                                    <tr>
                                        <th width="70%">date of departure</th>
                                        <td width="30%" class="text-right">
                                            22 Dec, 2030
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="join">
                                <a href="checkout.html" class="btn d-grid join-now mt-4 my-2">join now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- end -->
@endsection

@push('add-style')
        <!-- link css xzoom -->
        <link rel="stylesheet" href="{{ url('frontend/js/dist/xzoom.css') }}">
@endpush

@push('add-script')
        <!-- xzoom library js -->
        <script src="{{ url('frontend/js/dist/xzoom.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.xzoom, .xzoom-gallery').xzoom({
                    zoomWidth: 400,
                    defaultScale: 1,
                    title: false,
                    tint: '#333',
                    Xoffset: 28,
                });
            });
        </script>
@endpush
