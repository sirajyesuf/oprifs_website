<x-app>
    <!-- nav start -->
    <x-navbar></x-navbar>
    <!-- navbar end -->
    <!-- navigation -->
    <x-navigation :title="$title"></x-navigation>
    <!-- galler start -->

    <div class="container mt-100 pt-50">
        <div class="row">
            @foreach ($galleries as $picture )
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 pb-5 picture-item" data-groups='["business"]'>
                <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                    <img src="{{voyager::image($picture->image)}}" class="img-thumbnail work-image" alt="" max-width="324px" max-height="167px">
                    <div class="card-body">
                        <div class="content">
                            <p class="text-muted">{{$picture->caption}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- pagination -->
        <x-pagination :collection="$galleries"></x-pagination>
        <!-- gallery end -->

    </div>


    </div>


    <!-- Footer Start -->
    <x-footer></x-footer>
    <!--end footer-->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->


</x-app>