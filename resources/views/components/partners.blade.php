@props(['partners'])
<div class="container mt-100 mt-60">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="section-title mb-4">
                <h4 class="title mb-4 text-primary">Partners</h4>
                <!-- <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($partners as $partner )
        <div class="col-md-3 col-12 mt-4 pt-2">
            <div class="text-center">
                <div class="rounded p-4 shadow-lg  border-primary border-3">
                    <a href="javascript:void(0)"><img src="{{voyager::image($partner->logo)}}" height="100" class="mx-auto d-block" alt=""></a>
                </div>

                <div class="mt-4">

                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>