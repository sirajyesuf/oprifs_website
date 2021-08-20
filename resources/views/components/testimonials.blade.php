@props(['testimonies'])

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="section-title mb-4 ">
                <h4 class="title mb-4 text-primary">What others say about us</h4>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12 pt-2 mt-2 text-center">
            <div class="tiny-three-item">

                @foreach ($testimonies as $testimony)

                <div class="tiny-slide">

                    <div class="card client-testi m-2 text-center rounded shadow border-0">
                        <div class="card-body">
                            <p class="text-muted h6 fst-italic">" {{$testimony->testimony}} "</p>
                            <ul class="list-unstyled mb-0 mt-3">
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                            </ul>
                            <h6 class="text-primary">- {{$testimony->name}}</h6>
                        </div>
                    </div>


                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>