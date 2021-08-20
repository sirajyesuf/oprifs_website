<x-app>

    <!-- nav start -->
    <x-navbar></x-navbar>
    <!-- navbar end -->

<!-- newsdetail start -->
<x-news_detail :news="$news"></x-news_detail>
<!-- nwsdetailend -->

    <!-- Footer Start -->
    <x-footer></x-footer>
    <!--end footer-->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->


</x-app>