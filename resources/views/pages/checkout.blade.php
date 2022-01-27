@extends('layout.checkout')

@section('title')
    Checkout
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
                                    <li class="breadcrumb-item" aria-current="page">details</li>
                                    <li class="breadcrumb-item active" aria-current="page">checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-item-detail">
                                <h1>babi panggang</h1>
                                <p>pulau dewata bali</p>

                                <div class="berangkat">
                                    <table class="table table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <td>picture</td>
                                                <td>name</td>
                                                <td>nationality</td>
                                                <td>VISA</td>
                                                <td>passport</td>
                                                <td></td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ url('frontend/img/prof1.png') }}" height="60">
                                                </td>
                                                <td class="align-middle">john doe</td>
                                                <td class="align-middle">ID</td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">active</td>
                                                <td class="align-middle">
                                                    <a href="">
                                                        <img src="{{ url('frontend/img/cencel.png') }}" alt="">
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ url('frontend/img/prof1.png') }}" height="60">
                                                </td>
                                                <td class="align-middle">john doe</td>
                                                <td class="align-middle">ID</td>
                                                <td class="align-middle">N/A</td>
                                                <td class="align-middle">active</td>
                                                <td class="align-middle">
                                                    <a href="">
                                                        <img src="{{ url('frontend/img/cencel.png') }}" alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="kanggota mt-3">
                                    <h2>add member</h2>

                                    <form class="row row-cols-lg-auto g-3 align-items-center mt-2">
                                        <div class="col-12">
                                            <label class="visually-hidden" for="username">Username</label>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                        </div>

                                        <div class="col-12">
                                            <label class="visually-hidden " for="inlineFormSelectPref ">VISA</label>
                                            <select class="form-select" id="inlineFormSelectPref ">
                                                <option value="VISA" selected>VISA</option>
                                                <option value="30 days">30 days</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="visually-hidden " for="inlineFormSelectPref ">doe passport</label>
                                            <div class="input-group me-sm-2">
                                                <input type="text" class="form-control datepicker" placeholder="doe passport">
                                            </div>
                                        </div>

                                        <div class="col-12 ">
                                            <button type="submit " class="btn px-4 go">Add Now</button>
                                        </div>
                                    </form>

                                    <h3 class="mt-4 mb-0">note</h3>
                                    <p class="disclaimer">
                                        You are only able to invite member that has registered in this APP
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 " data-aos="flip-left"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                            <div class="card card-item-detail card-right ">
                                <h2>checkout information</h2>
                                <table class="trip-inform">
                                    <tr>
                                        <th width="70% ">members</th>
                                        <td width="30% " class="text-right ">
                                            2 person
                                        </td>
                                    </tr>

                                    <tr>
                                        <th width="70% ">additional VISA</th>
                                        <td width="30% " class="text-right ">
                                            $190,00
                                        </td>
                                    </tr>

                                    <tr>
                                        <th width="70%">trip price</th>
                                        <td width="30" class="text-right ">
                                            $80.00/persons
                                        </td>
                                    </tr>

                                    <tr>
                                        <th width="70% ">sub total</th>
                                        <td width="30% " class="text-right ">
                                            $280.00
                                        </td>
                                    </tr>

                                    <tr>
                                        <th width="70% ">total (+unique code)</th>
                                        <td width="30% " class="text-right text-total">
                                            <span class="text-blue">$200</span> ,
                                            <span class="text-orange">88</span>
                                        </td>
                                    </tr>
                                </table>
                                <hr>

                                <h2>payment instructions</h2>
                                <p class="payment-instruction">
                                    Please complate the payment before you continue the trip
                                </p>

                                <div class="bank">
                                    <div class="bank-item pb-3">
                                        <img src="{{ url('frontend/img/credit.png') }}" alt="" class="img-bank">
                                        <div class="bank-description">
                                            <h3>PT NoMADs ID</h3>
                                            <p>
                                                Bank Central Asia
                                                <br> 0829 0990 8390
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="bank-item pb-3">
                                        <img src="{{ url('frontend/img/credit.png') }}" alt="" class="img-bank">
                                        <div class="bank-description">
                                            <h3>PT NoMADs ID</h3>
                                            <p>
                                                Bank Central Asia
                                                <br> 0829 0990 8390
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="join">
                                <a href="{{ route(('success')) }}" class="btn d-grid join-now mt-4 my-2">i have made payment</a>
                            </div>

                            <div class="text-center mt-4">
                                <a href="{{ route('checkout') }}" class="text-muted">
                                    cencel booking
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- end -->
@endsection

@push('add-style')
    <!-- link gijigo -->
    <link rel="stylesheet" href="{{ url('frontend/js/gijigo/css/gijgo.min.css') }}">
@endpush

@push('add-script')
    <!-- gijigo js -->
    <script src="{{ url('frontend/js/gijigo/js/gijgo.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/img/date.png') }}" alt="">'
                }
            });
        });
    </script>
@endpush
