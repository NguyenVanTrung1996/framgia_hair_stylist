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
                    <a class="navbar-brand" href="/index">{{ __('Hair Salon') }}</a> 
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#" data-nav-section="home"><span>{{ __('Home') }}</span></a></li>
                        <li><a href="#" data-nav-section="pricing"><span>{{ __('Booking') }}</span></a></li>
                        <li><a href="#" data-nav-section="press"><span>{{ __('Hair Style') }}</span></a></li>
                        <li><a href="#" data-nav-section="about"><span>{{ __('About') }}</span></a></li>
                        <li><a href="#" data-nav-section="services"><span>{{ __('Services') }}</span></a></li>
                        <li><a href="#" data-nav-section="testimonials"><span>{{ __('Testimonials') }}</span></a></li>
                        <li><a href="{{asset('http://localhost:8000/login#')}}" data-nav-section="login" ><span>{{ __('Login') }}</span></a></li>
                        <li><a href="#" data-nav-section="signin"><span>{{ __('Signin') }}</span></a></li>
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
                                    <h1 class="fh5co-lead to-animate">{{ __('Sale') }} </h1>
                                    <h2 class="fh5co-sub-lead to-animate">{{ __('90% Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, omnis architecto quae rerum perferendis deserunt inventore eaque laudantium nulla dicta.') }} 
                                        <a href="#" target="_blank">{{ __('Hair Salon') }}</a>
                                    </h2>
                                    <p class="to-animate-2">
                                        <a href="#" class="btn btn-primary btn-lg" data-nav-section="pricing">{{ __('Booking Now') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 iphone-image">
                            <div class="iphone to-animate-2">
                                <img src="{{ asset('images/3.png') }} alt="">
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
                    <h2 class="single-animate animate-pricing-1">{{ __('Booking Start') }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="price-box to-animate">
                        <div>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" style="float: left;">{{ __('Nhap Thong Tin') }}</label>
                                    <input type="name" class="form-control" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <input type="Phone" class="form-control" placeholder="phoneNumber">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <!--  <div class="price-box to-animate">
                        <div>
                            <div class="col-md-4 col-sm-6">A</div>
                            <div class="col-md-4 col-sm-6">b</div>
                            <div class="col-md-4 col-sm-6">c</div>
                        </div>
                    </div>
                    <div class="price-box to-animate">
                        <div>
                            <div class="col-md-4 col-sm-6">A</div>
                            <div class="col-md-4 col-sm-6">b</div>
                            <div class="col-md-4 col-sm-6">c</div>
                        </div>
                    </div> -->
                    <div class="price-box to-animate">
                        <label for="#">Choice Deparment</label>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <td class="active">Deparment 1</td>
                                    <td class="success">Deparment 2</td>
                                    <td class="warning">Deparment 3</td>
                                </tr>
                                <tr>
                                    <td class="success">Deparment 4</td>
                                    <td class="warning">Deparment 5</td>
                                    <td class="active">Deparment 6</td>
                                </tr>
                                <tr>
                                    <td class="warning">Deparment 7</td>
                                    <td class="active">Deparment 8</td>
                                    <td class="success">Deparment 9</td>
                                </tr>
                                </table>
                            </div>
                        </div>
                       <!--  <label for="#">Choice Day</label>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <td class="active">Today</td>
                                    <td class="success">Tomorrow</td>
                                    <td class="warning">After Tomorrow</td>
                                </tr>
                                </table>
                            </div>
                        </div> -->
                        <label for="#">Choice Day</label>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <td class="danger" style="border: 1px solid blue">Day 1</td>
                                    <td class="danger" style="border: 1px solid blue">Day 2</td>
                                    <td class="danger" style="border: 1px solid blue">Day 3</td>
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
                            <input list="browsers" name="myBrowser" style="width: 296px" placeholder = "choice stylist"/></label>
                            <datalist id="browsers">
                                <option value="Style 2">
                                <option value="Style 3">
                                <option value="Style 4">
                                <option value="Style 5">
                                <option value="Style 6">
                                <option value="Style 7">
                            </datalist>
                        </div>
                        <!-- <div class="dropdown">
                            <a id="dLabel" data-target="#" href="http://example.com" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Dropdown trigger
                            <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                ...
                            </ul> -->
                        <label for="">Choice Time</label>
                        <div>
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <td class="active">8:00-8:30</td>
                                    <td class="success">8:30-9:00</td>
                                    <td class="warning">9:00-9:30</td>
                                    <td class="success">9:30-10:00</td>
                                </tr>
                                <tr>
                                    <td class="active">10:00-10:30</td>
                                    <td class="success">10:30-11:00</td>
                                    <td class="warning">11:00-11:30</td>
                                    <td class="success">11:30-12:00</td>
                                </tr>
                                <tr>
                                    <td class="active">12:00-12:30</td>
                                    <td class="success">12:30-13:00</td>
                                    <td class="warning">13:00-13:30</td>
                                    <td class="success">13:30-14:00</td>
                                </tr>
                                <tr>
                                    <td class="active">14:00-14:30</td>
                                    <td class="success">14:30-15:00</td>
                                    <td class="warning">15:00-15:30</td>
                                    <td class="success">15:30-16:00</td>
                                </tr>
                                <tr>
                                    <td class="active">16:00-16:30</td>
                                    <td class="success">16:30-17:00</td>
                                    <td class="warning">17:00-17:30</td>
                                    <td class="success">17:30-18:00</td>
                                </tr>
                                <tr>
                                    <td class="active">18:00-18:30</td>
                                    <td class="success">18:30-19:00</td>
                                    <td class="warning">19:00-19:30</td>
                                    <td class="success">19:30-20:00</td>
                                </tr>
                                <tr>
                                    <td class="active">20:00-20:30</td>
                                    <td class="success">20:30-21:00</td>
                                    <td class=""></td>
                                    <td class=""></td>
                                </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <button style="float: right;" type="button" class="btn btn-primary btn-lg">{{ __('Booking') }}</button>
        </div>
    </div>
    <div id="fh5co-press" data-section="press">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="single-animate animate-press-1">{{ __('Hair Style') }}</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext single-animate animate-press-2">
                            <h3>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.') }}</h3>
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
                            <h3 class="h2 fh5co-press-title">{{ __('Simplicity') }} <span class="fh5co-border"></span></h3>
                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...') }}</p>
                            <p><a href="#" class="btn btn-primary btn-sm">{{ __('Continue..') }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fh5co-press-item to-animate">
                        <div class="fh5co-press-img" style="background-image: url(images/2.jpg)">
                        </div>
                        <div class="fh5co-press-text">
                            <h3 class="h2 fh5co-press-title">{{ __('Versatile') }} <span class="fh5co-border"></span></h3>
                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...') }}</p>
                            <p><a href="#" class="btn btn-primary btn-sm">{{ __('Continue..') }}</a></p>
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
                            <h3 class="h2 fh5co-press-title">{{ __('Aesthetic') }} <span class="fh5co-border"></span></h3>
                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...') }}</p>
                            <p><a href="#" class="btn btn-primary btn-sm">{{ __('Continue..') }}</a></p>
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
                            <h3 class="h2 fh5co-press-title">{{ __('Creative') }} <span class="fh5co-border"></span></h3>
                            <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...') }}</p>
                            <p><a href="#" class="btn btn-primary btn-sm">{{ __('Continue..') }}</a></p>
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
                    <h2 class="to-animate">{{ __('About Us') }}</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 to-animate">
                            <h3>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 to-animate">
                    <img src="{{ asset('images/s.jpg') }}" class="img-responsive img-rounded" alt="Free HTML5 Template">
                </div>
                <div class="col-md-4 to-animate">
                    <h2>{{ __('How we got started') }}</h2>
                    <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. ') }}</p>
                    <p>{{ __('It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day.') }}</p>
                    <p>
                        <a href="#" class="btn btn-primary">{{ __('Meet the team stylist') }}</a>
                    </p>
                </div>
            </div>
            <div class="row" id="team">
                <div class="col-md-12 section-heading text-center to-animate">
                    <h2>{{ __('Stylist') }}</h2>
                </div>
                <div class="col-md-12">
                    <div class="row row-bottom-padded-lg">
                        <div class="col-md-4 text-center to-animate">
                            <div class="person">
                                <img src="{{ asset('images/1.jpg') }} class="img-responsive img-rounded" alt="Person">
                                <h3 class="name">{{ __('John Doe') }}</h3>
                                <div class="position">{{ __('Styler Pro') }}</div>
                                <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.') }}</p>
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
                                <img src="{{ asset('images/2.jpg') }}class="img-responsive img-rounded" alt="Person">
                                <h3 class="name">{{ __('Rob Smith') }}</h3>
                                <div class="position">{{ __('Styler Pro') }}</div>
                                <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.') }}</p>
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
                                <img src="{{ asset('images/3.png') }} class="img-responsive img-rounded" alt="Person">
                                <h3 class="name">{{ __('ohn Doe') }} </h3>
                                <div class="position">{{ __('Styler Pro') }}</div>
                                <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.') }}/p>
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
                    <h2 class="to-animate">{{ __('Our Services') }} </h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 to-animate">
                            <h3>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.') }} </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box to-animate">
                        <div class="icon colored-1"><span><i class="icon-mustache"></i></span></div>
                        <h3>{{ __('100% free') }} </h3>
                        <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.') }} </p>
                    </div>
                    <div class="box to-animate">
                        <div class="icon colored-4"><span><i class="icon-heart"></i></span></div>
                        <h3>{{ __('Made with love') }} </h3>
                        <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box to-animate">
                        <div class="icon colored-2"><span><i class="icon-screen-desktop"></i></span></div>
                        <h3>{{ __('Fully responsive') }}</h3>
                        <p>{{ __('ar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.) }}F</p>
                    </div>
                    <div class="box to-animate">
                        <div class="icon colored-5"><span><i class="icon-rocket"></i></span></div>
                        <h3>{{ __('Fast &amp; light') }}</h3>
                        <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box to-animate">
                        <div class="icon colored-3"><span><i class="icon-eye"></i></span></div>
                        <h3>{{ __('Retina-ready') }}</h3>
                        <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.') }}</p>
                    </div>
                    <div class="box to-animate">
                        <div class="icon colored-6"><span><i class="icon-user"></i></span></div>
                        <h3>{{ __('For creative like you!') }}</h3>
                        <p>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-testimonials" data-section="testimonials">       
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">{{ __('Happy Clients Says...!') }}</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>{{ __('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-testimony to-animate">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>{{ __('&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;') }}</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-testimony to-animate">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>{{ __('&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;') }}</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-testimony to-animate">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>{{ __('&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;') }}</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking -->
    <!-- Hair style -->
    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12">
                <i>
                    <p class="copyright text-center">{{ __('Dia Chi: Phuong Mai- Dong Da -Ha Noi') }}</p>
                    <p class="copyright text-center">{{ __('Fax: 0912-1234-12334') }}</p>
                    <p class="copyright text-center">{{ __('Phone: 0432312345') }}</p>
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


