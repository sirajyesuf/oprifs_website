@props(['galleries'])

<section class="section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4 text-primary">Gallery</h4>
                </div>
            </div>
        </div>


        <div class="row">

            @foreach ($galleries as $picture )
            <div class="col-lg-4 col-md-6 col-12 mt-4  pb-5 picture-item" data-groups='["business"]'>
                <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                    <img src="{{voyager::image($picture->image)}}" class="img-thumbnail-gallery work-image" alt="" max-width="324px" max-height="167px">
                    <div class="card-body">
                        <div class="content">
                            <p class="text-muted">{{$picture->caption}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>




        <div class="col-12">
            <x-button></x-button>
        </div>
    </div>
    </div>
</section>