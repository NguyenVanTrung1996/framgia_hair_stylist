<!DOCTYPE html>
<html class="no-js"> 
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
    {{ Html::style('bower/icomoon-bower/style.css') }}
    {{ Html::style('bower/animate.css/animate.css') }}
    {{ Html::style('bower/simple-line-icons/css/simple-line-icons.css')}}
    {{ Html::style('bower/owl.carousel/dist/assets/owl.carousel.min.css') }}
    {{ Html::style('bower/owl.carousel/dist/assets/owl.theme.default.min.css') }}
    {{ Html::style('bower/bootstrap/dist/css/bootstrap.css') }}
    {{ Html::style('css/style.css') }}
    {{ Html::script('bower/modernizr-2.6.2.min/index.js') }}
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
                        <li><a href="#" data-nav-section="pricing"><span>Booking</span></a></li>
                        <li><a href="#" data-nav-section="press"><span>Hair Style</span></a></li>
                        <li><a href="#" data-nav-section="about"><span>About</span></a></li>
                        <li><a href="#" data-nav-section="services"><span>Services</span></a></li>
                        <li><a href="#" data-nav-section="testimonials"><span>Testimonials</span></a></li>
                        <li><a href="{{ asset('login') }}" data-nav-section="login" ><span>Login</span></a></li>
                        <li><a href="{{ asset('signup') }}" data-nav-section="signup"><span>Sign Up</span></a></li>
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
                            <form>
                                <div class="form-group">Input info</label>
                                    <input type="name" class="form-control" placeholder="your name">
                                </div>
                                <div class="form-group">
                                    <input type="Phone" class="form-control" placeholder="your phone number">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="price-box to-animate">
                        <label for="#">Choice Deparment</label>
                        <div>
                            <div class="table-responsive">
                                <table class="table department">
                                <tr>
                                    <td class="warning">Deparment 1</td>
                                    <td class="warning">Deparment 2</td>
                                    <td class="warning">Deparment 3</td>
                                </tr>
                                <tr>
                                    <td class="warning">Deparment 4</td>
                                    <td class="warning">Deparment 5</td>
                                    <td class="warning">Deparment 6</td>
                                </tr>
                                <tr>
                                    <td class="warning">Deparment 7</td>
                                    <td class="warning">Deparment 8</td>
                                    <td class="warning">Deparment 9</td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <label for="#">Choice Day</label>
                        <div>
                            <div class="table-responsive">
                                <table class="table day_choice">
                                <tr>
                                    <td class="warning">Day 1</td>
                                    <td class="warning">Day 2</td>
                                    <td class="warning">Day 3</td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="price-box to-animate">
                        <label for="">Choice Stylist</label>
                        <div>
                            <input list="browsers" name="myBrowser" style="width: 296px" placeholder=" choice stylist"/></label>
                            <datalist id="browsers">
                                <option value="Style 2">
                                <option value="Style 3">
                                <option value="Style 4">
                                <option value="Style 5">
                                <option value="Style 6">
                                <option value="Style 7">
                            </datalist>
                        </div>
                        <label for="">Choice Time</label>
                        <div>
                            <div class="table-responsive">
                                <table class="table choice_time">
                                <tr>
                                    <td class="success">8:00 8:30</td>
                                    <td class="success">8:30 9:00</td>
                                    <td class="success">9:00 9:30</td>
                                    <td class="success">9:30 10:00</td>
                                </tr>
                                <tr>
                                    <td class="success">10:00 10:30</td>
                                    <td class="success">10:30 11:00</td>
                                    <td class="success">11:00 11:30</td>
                                    <td class="success">11:30 12:00</td>
                                </tr>
                                <tr>
                                    <td class="success">12:00 12:30</td>
                                    <td class="success">12:30 13:00</td>
                                    <td class="success">13:00 13:30</td>
                                    <td class="success">13:30 14:00</td>
                                </tr>
                                <tr>
                                    <td class="success">14:00 14:30</td>
                                    <td class="success">14:30 15:00</td>
                                    <td class="success">15:00 15:30</td>
                                    <td class="success">15:30 16:00</td>
                                </tr>
                                <tr>
                                    <td class="success">16:00 16:30</td>
                                    <td class="success">16:30 17:00</td>
                                    <td class="success">17:00 17:30</td>
                                    <td class="success">17:30 18:00</td>
                                </tr>
                                <tr>
                                    <td class="success">18:00 18:30</td>
                                    <td class="success">18:30 19:00</td>
                                    <td class="success">19:00 19:30</td>
                                    <td class="success">19:30 20:00</td>
                                </tr>
                                <tr>
                                    <td class="success">20:00 20:30</td>
                                    <td class="success">20:30 21:00</td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default">Booking</button>
                    </div>
                </div>  
            </div>
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
    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12">
                <i>
                    <p class="copyright text-center">Dia Chi: 434 Tran Khac Chan-Ha Noi</p>
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
    {{ Html::script('bower/jquery-2.1.4.min/index.js') }}
    {{ Html::script('bower/jquery.easing/js/jquery.easing.js') }}
    {{ Html::script('bower/bootstrap/dist/js/bootstrap.min.js') }}
    {{ Html::script('bower/waypoints/lib/jquery.waypoints.min.js') }}
    {{ Html::script('bower/owl.carousel/docs/assets/owlcarousel/owl.carousel.min.js') }}
    {{ Html::script('bower/jquery-style-switcher/jQuery.style.switcher.js') }}
    {{ Html::script('js/booking.js')}}
    {{ Html::script('js/main.js')}}
</body>
</html>


