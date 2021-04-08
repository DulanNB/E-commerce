@extends('frontend.layouts.master')

@section('main-content')
    <style>
        .terms {
            margin-left: 40px;
        }
        h5{
            color: gray;
        }
    </style>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Bank Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact -->
    <section id="privacy_policy-us" class="ftco-section bg-light ftco-faqs">
        <div class="jumbotron text-center">
            <h1 class="display-3">Thank You For shopping with us!</h1>
            <p class="lead"><strong>Please</strong> follow further instructions on how to complete your order.</p>
            <br>
            <strong> <b>Step 1:</b> Please send your payment into following bank account </strong>


                <p style="text-align: center">Name &nbsp; &nbsp; : Chandana Hettiarachi</p>
                <p style="text-align: center ; margin-right: 71px;">Acc No &nbsp;: 199813503021</p>
                <p style="text-align: center; margin-right: 37px;">Bank  &nbsp; &nbsp; &nbsp; :Commercial Bank</p>
                <p style="text-align: center; margin-right: 67px;">Branch &nbsp;:Kandy Branch</p>




            <strong> <b>Step 2:</b> Please Whatsapp your payment slip into <b style="color: black">0772141220</b>  </strong>
            <hr>
            <p>
                Having trouble? <a href="">Contact us</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="{{route('contact')}}" role="button">Continue to Contact Us</a>
            </p>
        </div>
    </section>
    <!--/ End Contact -->

    <!-- Map Section -->

    <!--/ End Map Section -->

    <!-- Start Shop Newsletter  -->
    <!-- End Shop Newsletter -->
    <!--================Contact Success  =================-->
@endsection

@push('styles')
    <style>
        .modal-dialog .modal-content .modal-header {
            position: initial;
            padding: 10px 20px;
            border-bottom: 1px solid #e9ecef;
        }

        .modal-dialog .modal-content .modal-body {
            height: 100px;
            padding: 10px 20px;
        }

        .modal-dialog .modal-content {
            width: 50%;
            border-radius: 0;
            margin: auto;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/contact.js') }}"></script>
@endpush
