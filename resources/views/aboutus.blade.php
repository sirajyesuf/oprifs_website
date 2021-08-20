 <x-app>
     <!-- nav start -->
     <x-navbar></x-navbar>
     <!-- navbar end -->
     <!-- navigation -->
     <x-navigation :title="$title"></x-navigation>

     <!-- About Start -->
     <section class="section">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                     <div class="position-relative">
                         <img src="{{asset('oprifs/images/enterprise.png')}}" class="rounded img-fluid mx-auto d-block" alt="">
                     </div>
                 </div>
                 <!--end col-->

                 <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                     <div class="section-title ms-lg-4">
                         <h3 class="title mb-4 font-monospace text-primary">About Us</h3>
                         <p>
                             {{$aboutus->aboutus}}


                             <br /><br />


                             <b class="text-primary font-monospace">Our Mission</b><br />
                             {{$aboutus->mission}}


                             .<br /><br />


                             <b class="text-primary font-monospace">Our Vision</b></br />
                             {{$aboutus->vision}}


                         </p>
                     </div>
                 </div>
                 <!--end col-->
             </div>
             <!--end row-->
         </div>
         <!--end container-->
     </section>
     <!--end section-->
     <!-- About End -->


     <!-- Footer Start -->
     <x-footer></x-footer>
     <!--end footer-->

     <!-- Back to top -->
     <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
     <!-- Back to top -->


 </x-app>