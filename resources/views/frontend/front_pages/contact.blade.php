@extends('frontend.front_pages.master')

@section('content')

  <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Booking</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14593.205764140606!2d90.3911893!3d23.8789273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c66fa327665d%3A0xbfd47517eb3e2224!2sKodeeo%20Limited!5e0!3m2!1sen!2sbd!4v1704546241141!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">


                            <div class="text-center col-lg-6 col-md-6 float-end mt-6">
                                <h4 class="display-3 section-title ff-secondary text-start text-secondary fw-normal mb-4">Location</h4>
                                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>House 15 Road No. 10A, Dhaka 1230</p>
                                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                                <p class="mb-2"><i class="fa fa-envelope me-3"></i>restoran@example.com</p>
                              
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


@endsection