<!-- Start Contact -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 text-center features feature-clean">
                    <div class="card-body">
                        <img src="{{asset('oprifs_img/phone-call.png')}}" class="avatar avatar-small mb-3" alt="phone">
                        <div class="content mt-3">
                            <h5 class="fw-bold">Phone</h5>
                            <a href="tel:+152534-468-854" class="text-primary">{{setting('site.phone_number')}}</a>
                        </div>
                    </div>

                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-clean">
                    <div class="card-body">
                        <img src="{{asset('oprifs_img/email.png')}}" class="avatar avatar-small mb-3" alt="phone">
                        <div class="content mt-3">
                            <h5 class="fw-bold">Email</h5>
                            <a href="info@oeiryt-consult.com" class="text-primary">
                                {{setting('site.email')}}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-clean">
                    <div class="card-body">
                        <img src="{{asset('oprifs_img/pin.png')}}" class="avatar avatar-small mb-3" alt="phone">
                        <div class="content mt-3">
                            <h5 class="fw-bold">Location</h5>
                            <p class="text-muted">
                                {{setting('site.location')}}
                            </p>
                            <a href="{{setting('site.googlemap')}}" data-type="iframe" class="video-play-icon text-primary lightbox">View on Google map</a>
                        </div>
                    </div>

                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!--end container-->

    <div class="container mt-100 mt-60">
        @if(Session::has('success'))
        <div class="alert alert-primary text-lg" role="alert">
            Thank you. the message successfully send.
        </div>
        @endif
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="card shadow rounded border-0">
                    <div class="card-body py-5">
                        <h4 class="card-title">Get In Touch !</h4>
                        <div class="custom-form mt-3">
                            <form method="POST" action="{{route('message')}}">
                                @csrf
                                <p id="error-msg" class="mb-0"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">

                                            </div>
                                            <br>

                                            @error('name')
                                            <p class="alert alert-danger pt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">


                                            </div>
                                            <br>
                                            @error('email')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">

                                            </div>

                                            <br>
                                            @error('subject')
                                            <p class="alert alert-danger pt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                <textarea name="message" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>


                                            </div>
                                            <br>
                                            @error('message')
                                            <p class="alert alert-danger pt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!--end custom-form-->
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="col-lg-7 col-md-6 order-1 order-md-2">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <img src="{{asset('oprifs/images/contact.svg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-->
<!-- End contact -->