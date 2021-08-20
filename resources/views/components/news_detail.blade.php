@props(['news'])
<section class="section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">

                    <div class="col-md-10" x-data="">

                        <ul class="list-unstyled d-flex justify-content-between mt-4">
                            <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-dark"></i> {{\Carbon\Carbon::parse($news->created_at)->toDayDateTimeString() }}
                            </li>
                        </ul>
                        <img src="{{'/storage/'.$news->image}}" class="img-fluid rounded-md shadow" alt="">

                        <h5 class="mt-4">{{$news->title}}</h5>
                        <div x-html="'{{$news->body}}'" class="text-muted">

                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>