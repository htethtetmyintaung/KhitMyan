<section class="contact" id="section_5">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f9c10b" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

    <div class="contact-container-wrap">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">

                    <div class="contant-us">
                       
                        <div>
                            <h3>{{ $contacts->title_en }}</h3>
                            
                            <h5 class="mb-4">{{ $contacts->address_en }}</h5>

                            <h4 class="mb-2">
                                <a href="tel: 240-480-9600">
                                    <i class="bi-telephone contact-icon me-2"></i>
                                    {{ $contacts->phone }}
                                </a>
                            </h4>

                            <h5>
                                <a href="#" class="footer-link">
                                    <i class="bi-envelope-fill contact-icon me-2"></i>
                                    {{ $contacts->email }}
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
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15274.224267442702!2d96.16449052855644!3d16.84836531445851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c193406dfde821%3A0xc94e7def5f0d0924!2z4YCd4YCx4YCH4YCa4YCU4YC54YCQ4YCs4YCc4YCZ4YC64YC4LCDhgJvhgJThgLrhgIDhgK_hgJThgLosIOGAmeGAvOGAlOGAuuGAmeGArA!5e0!3m2!1smy!2ssg!4v1666798056969!5m2!1smy!2ssg" width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div><a href="#" class="scrollup">Scroll</a></div>