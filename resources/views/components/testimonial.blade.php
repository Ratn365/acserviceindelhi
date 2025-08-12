 @php
 $allimages = array_column($clientData['site']['testimonials']['items'], 'image');
 @endphp
 <div class="container-xxl py-5">
     <div class="container">
         <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <h1 class="display-6 mb-5">{{$clientData['site']['testimonials']['title']}}</h1>
            <!-- <p class="mb-5">{{$clientData['site']['testimonials']['subtext']}}</p>-->
         </div>
         <!-- Testimonial Carousel -->
         <div class="row g-5">
             <div class="col-lg-3 d-none d-lg-block">
                 <div class="testimonial-left h-100">
                     <!-- Output all images -->
                     @foreach($allimages as $image)
                     <img class="img-fluid animated pulse infinite" src="{{ asset($image) }}" alt="testimonial image">
                     @endforeach
                 </div>
             </div>

             <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                 <div class="owl-carousel testimonial-carousel">
                     @foreach($clientData['site']['testimonials']['items'] as $testimonialItem)
                     <div class="testimonial-item text-center">
                         <img class="img-fluid mx-auto mb-4" src="{{$testimonialItem['image']}}" alt="">
                         <p class="fs-5">{{$testimonialItem['feedback']}}</p>
                         <h5>{{$testimonialItem['name']}}</h5>
                         <span>{{$testimonialItem['profession']}}</span>
                     </div>
                     @endforeach
                 </div>
             </div>

             <div class="col-lg-3 d-none d-lg-block">
                 <div class="testimonial-right h-100">
                     <!-- Output all images -->
                     @foreach($allimages as $image)
                     <img class="img-fluid animated pulse infinite" src="{{ asset($image) }}" alt="testimonial image">
                     @endforeach
                 </div>
             </div>

         </div>
     </div>
 </div>
 </div>
 <!-- Testimonial End -->