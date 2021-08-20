<x-app>

    <!-- nav start -->
    <x-navbar></x-navbar>
    <!-- navbar end -->
    <!-- navigation -->
    <x-navigation :title="$title"></x-navigation>

    <!-- stories start -->
    <section class="section">
        <div class="container">

            <div id="grid" class="row">
                @foreach ($stories as $story)

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 pb-5 picture-item" x-data="">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{voyager::image($story->image)}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">{{$story->title}}</a></h5>
                                <p class="text-muted">
                                    {{$story->excerpt}}

                                </p>
                                <a href="{{route('readmore',['id' => $story->id])}}" class="text-primary h6">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

            <!-- pagination -->
            <x-pagination :collection="$stories"></x-pagination>
            <!-- gallery end -->

        </div>
        <!--end container-->
    </section>
    <!--end section-->


    <!-- stories end -->

    <!-- Footer Start -->
    <x-footer></x-footer>
    <!--end footer-->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->


</x-app>