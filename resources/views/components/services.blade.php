<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-5">{{$clientData['site']['services']['title']}}</h1>
            <p class="mb-5">{{$clientData['site']['services']['subtext']}}</p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($clientData['site']['services']['items'] as $serviceItem)
            @if($loop->first)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                @else
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $loop->index * 0.2 }}s">
                    @endif
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset($serviceItem['image']) }}" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="{{ asset($serviceItem['icon']) }}" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">{{ $serviceItem['title'] }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>