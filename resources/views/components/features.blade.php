<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-5">{{$clientData['site']['features']['title']}}</h1>
                <p class="mb-5">{{$clientData['site']['features']['subtext']}}</p>

                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                        <img class="img-fluid" src="{{ asset('img/icon/icon-08-light.png') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">{{$clientData['site']['features']['items'][0]['title']}}</h5>
                        <span>{{$clientData['site']['features']['items'][0]['subtext']}}</span>
                    </div>
                </div>
                <div class="d-flex mb-5">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                        <img class="img-fluid" src="{{ asset('img/icon/icon-10-light.png') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">{{$clientData['site']['features']['items'][1]['title']}}</h5>
                        <span>{{$clientData['site']['features']['items'][1]['subtext']}}</span>
                    </div>
                </div>
                <div class="d-flex mb-0">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                        <img class="img-fluid" src="{{ asset('img/icon/icon-06-light.png') }}" alt="">
                    </div>
                    <div class="ms-4">
                        <h5 class="mb-3">{{$clientData['site']['features']['items'][2]['title']}}</h5>
                        <span>{{$clientData['site']['features']['items'][2]['subtext']}}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/feature.jpg') }}" alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>