@extends('layout.success')

@section('title')
    Checkout Success
@endsection

@section('content')
        <!-- detail -->
        <main>
            <div class="checkout-success d-flex align-items-center" data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
                <div class="col text-center">
                    <img src="{{ url('frontend/img/success-checkout.png') }}" alt="">
                    <h1 class="mt-3">Congrats, SUCCESS</h1>
                    <p>
                        We’ve sent you email for trip,
                        <br> please read it as well
                    </p>
                    <a href="{{ url('/') }}" class="btn btn-homepage mt-3 px-5">Homepage</a>
                </div>
            </div>
        </main>
        <!-- end -->
@endsection
