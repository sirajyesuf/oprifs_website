@props([ 'goals'])
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4 text-primary">Overall Goal</h4>
                    <p class="text-muted para-desc mx-auto mb-0">
                        to contribute to the national effort of the country to enable children enjoy social equality, economic freedom prevention, protection and rehabilitation from the consequence of social inequalities.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($goals as $goal )
            <div class="col-lg-4 mt-4 pt-2">
                <div class="card features fea-primary rounded p-4 bg-light position-relative overflow-hidden border-0">
                    <div class="align-items-center">
                        <span class="h2 mb-0 icon2 text-primary float-md-end">
                            <i class="uil uil-mobile-android"></i>
                        </span>
                        <h5 class="mb-0 mt-md-2">{{$goal->name}}</h5>
                    </div>
                    <div class="card-body p-0 content mt-3">
                        <p class="para text-muted mb-0">
                            {{$goal->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>