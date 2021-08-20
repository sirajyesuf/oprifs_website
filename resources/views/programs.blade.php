<x-app>
    <!-- nav start -->
    <x-navbar></x-navbar>
    <!-- navbar end -->
    <!-- navigation -->
    <x-navigation :title="$title"></x-navigation>
    <!-- programs start -->
    <div class="container mt-100 mt-60">
        <div class="row align-items-end mb-4 pb-2">
            <div class="col-md-8">
                <div class="section-title text-center text-md-start">
                    <!-- <h6 class="text-primary">Services</h6> -->
                    <h4 class="title mb-1 text-primary">Our Programs</h4>
                    <!-- <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                </div>
            </div>


        </div>

        <div class="row" x-data="{ index:0}">
            <div class="col-md-4 mt-4 pt-2 pb-5">
                <ul class="nav nav-pills nav-justified flex-column bg-white rounded shadow p-3 mb-0 sticky-bar" id="pills-tab" role="tablist">
                    @foreach ($programs as $program)
                    <li class="nav-item mt-2" @click="index='{{$loop->index}}'">
                        <a class="nav-link rounded {{$loop->index===0?'active':''}}" id="orthopadic" data-bs-toggle="pill" href="#ortho" role="tab" aria-controls="ortho" aria-selected="false">
                            <div class="text-start py-1 px-2">
                                <h6 class="mb-0">{{$program->name}}</h6>
                            </div>
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>

            <div class="col-md-8 col-12 mt-4 pt-2 pb-3">
                <div class="tab-content" id="pills-tabContent">

                    @foreach ($programs as $program)
                    <div x-bind:class="index === '{{$loop->index}}' ? 'show active' : ''" class="tab-pane fade bg-white  p-4 rounded shadow" role="tabpanel">
                        <div class="mt-4">
                            <h5>{{$program->name}}</h5>
                            <p class="text-muted my-3">{{$program->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- programs end -->

    <!-- Footer Start -->
    <x-footer></x-footer>
    <!--end footer-->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->


</x-app>