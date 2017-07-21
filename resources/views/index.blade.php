<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    {{ Html::style('css/font.css') }}
    {{ Html::style('css/icomoon.css') }}
    {{ Html::style('bower/animate.css/animate.css') }}
    {{ Html::style('bower/simple-line-icons/css/simple-line-icons.css')}}
    {{ Html::style('bower/owl.carousel/dist/assets/owl.carousel.min.css') }}
    {{ Html::style('bower/owl.carousel/dist/assets/owl.theme.default.min.css') }}
    {{ Html::style('bower/bootstrap/dist/css/bootstrap.css') }}
    {{ Html::style('css/style.css') }}
    {{ Html::style('css/main.css') }}
    {{ Html::script('js/modernizr-2.6.2.min.js') }}
</head>
<body>
    <header role="banner" id="fh5co-header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                    <a class="navbar-brand" href="/index">Hair Salon</a> 
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
                        <li><a href="#" data-nav-section="about"><span>About</span></a></li>
                        <li><a href="#" data-nav-section="services"><span>Services</span></a></li>
                        <li><a href="#" data-nav-section="testimonials"><span>Testimonials</span></a></li>
                        <li><a href="#" data-nav-section="pricing"><span>Booking</span></a></li>
                        <li><a href="#" data-nav-section="press"><span>Hair Style</span></a></li>
                        <li><a href="{{asset('http://localhost:8000/login#')}}" data-nav-section="login" ><span>Login</span></a></li>
                        <li><a href="#" data-nav-section="signin"><span>Signin</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div id="slider" data-section="home">
        <div class="owl-carousel owl-carousel-fullwidth">
            <div class="item" style="background: #352f44;">
                <div class="container" style="position: relative;">
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text">
                                    <h1 class="fh5co-lead to-animate">Sale </h1>
                                    <h2 class="fh5co-sub-lead to-animate">90% Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, omnis architecto quae rerum perferendis deserunt inventore eaque laudantium nulla dicta. 
                                        <a href="#" target="_blank">Hair Salon</a>
                                    </h2>
                                    <p class="to-animate-2">
                                        <a href="#" class="btn btn-primary btn-lg" data-nav-section="pricing">Booking Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 iphone-image">
                            <div class="iphone to-animate-2">
                                <img src="images/3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-about-us" data-section="about">
        <div class="container">
            <div class="row row-bottom-padded-lg" id="about-us">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">About Us</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 to-animate">
                            <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 to-animate">
                    <img src="images/s.jpg" class="img-responsive img-rounded" alt="Free HTML5 Template">
                </div>
                <div class="col-md-4 to-animate">
                    <h2>How we got started</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. </p>
                    <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day.</p>
                    <p>
                        <a href="#" class="btn btn-primary">Meet the team stylist</a>
                    </p>
                </div>
            </div>
            <div class="row" id="team">
                <div class="col-md-12 section-heading text-center to-animate">
                    <h2>Stylist</h2>
                </div>
                <div class="col-md-12">
                    <div class="row row-bottom-padded-lg">
                        <div class="col-md-4 text-center to-animate">
                            <div class="person">
                                <img src="images/1.jpg" class="img-responsive img-rounded" alt="Person">
                                <h3 class="name">John Doe</h3>
                                <div class="position">Styler Pro</div>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                <ul class="social social-circle">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 text-center to-animate">
                            <div class="person">
                                <img src="images/2.jpg" class="img-responsive img-rounded" alt="Person">
                                <h3 class="name">Rob Smith</h3>
                                <div class="position">Styler Pro</div>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                <ul class="social social-circle">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 text-center to-animate">
                            <div class="person">
                                <img src="images/3.png" class="img-responsive img-rounded" alt="Person">
                                <h3 class="name">John Doe</h3>
                                <div class="position">Styler Pro</div>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                <ul class="social social-circle">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-our-services" data-section="services">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Our Services</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 to-animate">
                            <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box to-animate">
                        <div class="icon colored-1"><span><i class="icon-mustache"></i></span></div>
                        <h3>100% free</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="box to-animate">
                        <div class="icon colored-4"><span><i class="icon-heart"></i></span></div>
                        <h3>Made with love</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box to-animate">
                        <div class="icon colored-2"><span><i class="icon-screen-desktop"></i></span></div>
                        <h3>Fully responsive</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="box to-animate">
                        <div class="icon colored-5"><span><i class="icon-rocket"></i></span></div>
                        <h3>Fast &amp; light</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box to-animate">
                        <div class="icon colored-3"><span><i class="icon-eye"></i></span></div>
                        <h3>Retina-ready</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                    <div class="box to-animate">
                        <div class="icon colored-6"><span><i class="icon-user"></i></span></div>
                        <h3>For creative like you!</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-testimonials" data-section="testimonials">       
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Happy Clients Says...</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-testimony to-animate">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-testimony to-animate">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-testimony to-animate">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-pricing" data-section="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="single-animate animate-pricing-1">Booking Start</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="price-box to-animate">
                        <div>
                            Info
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="price-box to-animate">
                        <div>
                            Choice Deparment And Day
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="price-box to-animate">
                     <div>Choice Stylist And Time</div>
                    </div>
                </div>  
            </div>
            <button style="float: right;" type="button" class="btn btn-primary btn-lg">Booking</button>
        </div>
    </div>
    <div id="fh5co-press" data-section="press">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="single-animate animate-press-1">Hair Style</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2">
                            <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="fh5co-press-item to-animate">
                        <div class="fh5co-press-img" style="background-image: url(images/1.jpg)">
                        </div>
                        <div class="fh5co-press-text">
                            <h3 class="h2 fh5co-press-title">Simplicity <span class="fh5co-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Continue..</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-press-item to-animate">
                        <div class="fh5co-press-img" style="background-image: url(images/2.jpg)">
                        </div>
                        <div class="fh5co-press-text">
                            <h3 class="h2 fh5co-press-title">Versatile <span class="fh5co-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Continue..</a></p>
                        </div>
                    </div>
                    <!-- Press Item -->
                </div>
                <div class="col-md-6">
                    <!-- Press Item -->
                    <div class="fh5co-press-item to-animate">
                        <div class="fh5co-press-img" style="background-image: url(images/3.png);">
                        </div>
                        <div class="fh5co-press-text">
                            <h3 class="h2 fh5co-press-title">Aesthetic <span class="fh5co-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Continue..</a></p>
                        </div>
                    </div>
                    <!-- Press Item -->
                </div>
                <div class="col-md-6">
                    <!-- Press Item -->
                    <div class="fh5co-press-item to-animate">
                        <div class="fh5co-press-img" style="background-image: url(images/4.jpg);">
                        </div>
                        <div class="fh5co-press-text">
                            <h3 class="h2 fh5co-press-title">Creative <span class="fh5co-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Continue..</a></p>
                        </div>
                    </div>
                    <!-- Press Item -->
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12">
                <i>
                    <p class="copyright text-center">Dia Chi: Phuong Mai- Dong Da -Ha Noi</p>
                    <p class="copyright text-center">Fax: 0912-1234-12334</p>
                    <p class="copyright text-center">Phone: 0432312345</p>
                    </i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social social-circle">
                        <li><a href="{{asset('http://localhost:8000/home#')}}"><i class="icon-twitter"></i></a></li>
                        <li><a href="{{asset('http://localhost:8000/home#')}}"><i class="icon-facebook"></i></a></li>
                        <li><a href="{{asset('http://localhost:8000/home#')}}"><i class="icon-youtube"></i></a></li>
                        <li><a href="{{asset('http://localhost:8000/home#')}}"><i class="icon-pinterest"></i></a></li>
                        <li><a href="{{asset('http://localhost:8000/home#')}}""><i class="icon-linkedin"></i></a></li>
                        <li><a href="{{asset('http://localhost:8000/home#')}}"><i class="icon-instagram"></i></a></li>
                        <li><a href="{{asset('http://localhost:8000/home#')}}"><i class="icon-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{ Html::script('js/jquery.min.js')}}
    <!-- <script src="js/jquery.easing.1.3.js"></script> -->
    {{ Html::script('bower/jquery.easing/js/jquery.easing.js')}}
    <!-- Bootstrap -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    {{ Html::script('bower/bootstrap/dist/js/bootstrap.min.js') }}
    <!-- Waypoints -->
    <!-- <script src="js/jquery.waypoints.min.js"></script> -->
    {{ Html::script('bower/waypoints/lib/jquery.waypoints.min.js')}}
    <!-- Owl Carousel -->
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    {{ Html::script('bower/owl.carousel/docs/assets/owlcarousel/owl.carousel.min.js') }}
    <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="js/jquery.style.switcher.js"></script>
    <script>
        $(function(){
            $('#colour-variations ul').styleSwitcher({
                defaultThemeId: 'theme-switch',
                hasPreview: false,
                cookie: {
                    expires: 30,
                    isManagingLoad: true
                }
            }); 
            $('.option-toggle').click(function() {
                $('#colour-variations').toggleClass('sleep');
            });
        });
    </script>
    <!-- <script src="js/main.js"></script> -->
    {{ Html::script('js/main.js')}}
</body>
</html>


