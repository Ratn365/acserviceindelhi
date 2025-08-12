<div class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <!-- Logo 
<a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0 fs-4"><img class="img-fluid me-3" src="{{ asset('img/icon/icon-02-primary.png') }}" alt="">{{ $clientData['site']['title'] }}</h1>
    </a>
-->
    <a href="/" class="navbar-brand d-flex align-items-center">
       <img class="img-fluid ms-3" src="{{ asset('img/icon/icon-02-primary.png') }}" alt="">
        <h1 class="mb-0 fs-4 fw-bold d-flex flex-column">          
            <span class="d-flex align-items-center">
                <span class="text-primary">Ac</span>
                <span class="text-primary">Service</span>
            </span>
            <span class="text-secondary small  text-end">In Delhi</span>            
        </h1>       
    </a>

    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link">About Us</a>
            <a href="{{ url('/service') }}" class="nav-item nav-link">Our Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="{{ url('/feature') }}" class="dropdown-item">Features</a>
                    <a href="{{ url('/quote') }}" class="dropdown-item">Free Quote</a>
                    <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a>
                    <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                    <a href="{{ url('/404') }}" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">

            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{$clientData['site']['social']['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{$clientData['site']['social']['twitter'] }}"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{$clientData['site']['social']['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="{{$clientData['site']['social']['instagram'] }}"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>