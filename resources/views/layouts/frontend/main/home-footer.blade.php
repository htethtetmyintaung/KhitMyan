<section class="contact" id="contactus">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f9c10b" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    <div class="contact-container-wrap">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">

                    <div class="contant-us">
                       
                        <div>
                            <h3>{{ $contacts->title_en }}</h3>
                            
                            <h5 class="mb-4">{!! \Illuminate\Support\Str::words($contacts->address_en) !!}</h5>

                            <h4 class="mb-2">
                                <a href="tel: 240-480-9600">
                                    <i class="bi-telephone contact-icon me-2"></i>
                                    {{ $contacts->phone_en }}
                                </a>
                            </h4>

                            <h5>
                                <a href="#" class="footer-link">
                                    <i class="bi-envelope-fill contact-icon me-2"></i>
                                    {{ $contacts->email_en }}
                                </a>
                            </h5>
                        </div>
                     
                        <div class="site-footer-wrap d-flex align-items-center">

                            <ul class="social-icon">
                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>
    
                                <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                                <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                                <li><a href="#" class="social-icon-link bi-pinterest"></a></li>
                            </ul>
                            
                        </div> 
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="contact-thumb">
                        
                        <div class="contact-info bg-white shadow-lg">
                            
                            {!! $contacts->map_en !!}
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div><a href="#" class="scrollup">Scroll</a></div>