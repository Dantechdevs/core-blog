@extends('pages.layouts.master')

@section('content')
 <!-- About Start -->
 <div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Website</h6>
                    <h2 class="mt-2">Get flexibility of accessing emails from any device with an internet connection</h2>
                </div>
                <p class="mb-4">Webmail for business email is a crucial component of modern business communication, offering professionalism, accessibility, security, and collaboration features that contribute to the overall efficiency and success of a business. <br>
                    <b  class="text-primary">Features:</b>
                </p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Security and Data Protection:</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Calendar Delegation</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Backup and Recovery:</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Calendar,Contacts,Events</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Start a free Trial</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset("images/email/emaild1.png") }}">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.7s" src="{{ asset("images/email/contactd2.png") }}">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.12s" src="{{ asset("images/email/contactd3.png") }}">
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
