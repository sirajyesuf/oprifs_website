<x-app>

    <!-- nav start -->
    <x-navbar></x-navbar>
    <!-- navbar end -->

    <!-- Hero Start -->
    <x-hero></x-hero>
    <!-- Hero End -->

    <!-- Partners start -->
    <div id="overallgoal">
        <x-goal :goals="$goals"></x-goal>
    </div>
    <!-- Partners End -->

    <!-- news start -->
    <div id="news">
        <x-news :allnews="$allnews"></x-news>
    </div>
    <!-- news end -->

    <!-- galler start -->
    <div id="gallery">
        <x-gallery :galleries="$galleries"></x-gallery>

    </div>
    <!-- gallery end -->

    <!-- start testimonials -->
    <x-testimonials :testimonies="$testimonies"></x-testimonials>
    <!-- end testimonials -->

    <!-- start partners -->
    <x-partners :partners="$partners"></x-partners>
    <!-- endpartners -->


    <!-- Footer Start -->
    <x-footer></x-footer>
    <!--end footer-->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->


</x-app>