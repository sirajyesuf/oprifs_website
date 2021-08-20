@props(['allnews'])
<section class="section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4 text-primary">Our Latest News</h4>
                </div>
            </div>
        </div>


        <div class="row">

            @foreach ($allnews as $news)
            <div class="col-lg-6 col-12 mb-4 pb-2">
                <div class="card blog rounded border-0 shadow overflow-hidden">
                    <div class="row align-items-center g-0">
                        <div class="col-md-6">
                            <img src="{{voyager::image($news->image)}}" class="img-fluid" alt="">
                            <div class="overlay bg-dark"></div>
                            <div class="author">
                                <small class="text-light date"><i class="uil uil-calendar-alt"></i>
                                    {{\Carbon\Carbon::parse($news->created_at)->toDayDateTimeString() }}
                                </small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card-body content">
                                <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$news->title}}</a></h5>
                                <p class="text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability</p>
                                <div class="post-meta d-flex justify-content-between mt-3">

                                    <a href="{{route('readmore',['id' => $news->id])}}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>




        <div class="col-12">
            {{ $allnews->links() }}
        </div>
    </div>
    </div>
</section>