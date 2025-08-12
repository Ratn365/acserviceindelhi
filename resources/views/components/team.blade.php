<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-5">{{$clientData['site']['teams']['title']}}</h1>
            <p class="mb-5">{{$clientData['site']['teams']['subtext']}}</p>
        </div>
        <div class="row g-4">
            @foreach($clientData['site']['teams']['members'] as $member)
            @if($loop->first)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                @else
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{0.1 * 2*$loop->index}}s">
            @endif
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{$member['image']}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-square btn-primary rounded-circle m-1" href="{{$member['facebook']}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle m-1" href="{{$member['twitter']}}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle m-1" href="{{$member['instagram']}}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5>{{$member['name']}}</h5>
                        <span class="text-primary">{{$member['position']}}</span>
                    </div>
                </div>
            </div>
            
            @endforeach

            
        </div>
    </div>
</div>