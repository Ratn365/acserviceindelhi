<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6">
                <h1 class="text-white mb-4"><img class="img-fluid me-3" src="{{ asset('img/icon/icon-02-light.png') }}" alt="">{{$clientData['site']['title']}}</h1>
                <span>{{$clientData['site']['description']}}</span>
            </div>
            <div class="col-md-6">
                <h5 class="text-light mb-4">Newsletter</h5>
                <p>Sign Up To Our Newsletter To Get The Latest Offers</p>
                <div class="position-relative">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{$clientData['site']['contact']['address']}}</p>
                <p><i class="fa fa-phone-alt me-3"></i>{{$clientData['site']['contact']['phone']}}</p>
                <p><i class="fa fa-envelope me-3"></i>{{$clientData['site']['contact']['email']}}</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Our Services</h5>
                <a class="btn btn-link" href="">AC Installation</a>
                <a class="btn btn-link" href="">Cooling Services</a>
                <a class="btn btn-link" href="">Heating Services</a>
                <a class="btn btn-link" href="">Annual Inspections</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Our Services</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Follow Us</h5>
                <div class="d-flex">
                    <a class="btn btn-square rounded-circle me-1" href="{{$clientData['site']['social']['twitter'] }}"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="{{$clientData['site']['social']['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="{{$clientData['site']['social']['instagram'] }}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="{{$clientData['site']['social']['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">{{$clientData['site']['title']}}</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a href="">{{$clientData['site']['title']}}</a>
                </div>
            </div>
        </div>
    </div>
</div>