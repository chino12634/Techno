@extends('web.layouts.default')

@section('title', 'About Us')

@section('content')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about_us_area">
        <!-- About-Top -->
        <section id="about-top" class="ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about_top_img">
                            <img src="{{asset('web/img/common/img-about.jpg')}}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about_top_left_content">
                            <h2>ABOUT OUR Andshop STORE</h2>
                            <h4>We believe that every project existing in digital world is a result of an idea and every
                                idea has a cause.</h4>
                            <p>For this reason, our each design serves an idea. Our strength in design is reflected by
                                our
                                name, our care for details.
                                Our specialist won't be afraid to go extra miles just to approach near perfection. We
                                don't
                                require everything to be perfect,
                                but we need them to be perfectly cared for. </p>
                            <p>That's a reason why we are willing to give contributions at best.Not a single detail is
                                missed out under Billey's
                                professional eyes. The amount of dedication and effort equals to the level of passion
                                and
                                determination.
                                Get better, together as one. Proin eget tortor risus. Praesent sapien massa, convallis a
                                pellentesque nec,
                                egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et,
                                porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Promo -->
        <section id="service_promo_area" class="ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service_promo_single_item">
                            <div class="service_prom_image">
                                <img src="{{asset('web/img/icon/icon_about1.jpg')}}" alt="img">
                            </div>
                            <div class="service_prom_content">
                                <h3>Creative Always</h3>
                                <p>Stay creative with Billey and the huge collection of premade elements, layouts &amp;
                                    effects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service_promo_single_item">
                            <div class="service_prom_image">
                                <img src="{{asset('web/img/icon/icon_about2.jpg')}}" alt="img">
                            </div>
                            <div class="service_prom_content">
                                <h3>Express Customization</h3>
                                <p>Easy to install and configure the theme customization in a few clicks with Billey.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service_promo_single_item">
                            <div class="service_prom_image">
                                <img src="{{asset('web/img/icon/icon_about3.jpg')}}" alt="img">
                            </div>
                            <div class="service_prom_content">
                                <h3>Premium Integrations</h3>
                                <p>Integrated premium plugins in Billey is the secret weapon for your business to
                                    thrive.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="service_promo_single_item">
                            <div class="service_prom_image">
                                <img src="{{asset('web/img/icon/icon_about4.jpg')}}" alt="img">
                            </div>
                            <div class="service_prom_content">
                                <h3>Real-time Editing</h3>
                                <p>Edit your work and preview the changes on the screen live with advanced page builder.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area -->
        <section id="team_area" class="ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center_heading">
                            <h2>Expert Team</h2>
                            <p>The team is made up of skilled developers who collaborate to solve challenging problems and create innovative solutions. </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2169px, 0px, 0px); transition: all 1s ease 0s; width: 4338px;">
                                    <div class="owl-item cloned" style="width: 331.5px; margin-right: 60px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team1.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Mr. Heroas</h4>
                                                <span class="team-title">Head Of Markating</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team2.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Ms. Raka</h4>
                                                <span class="team-title">Admin</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team3.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Ms. Valona</h4>
                                                <span class="team-title">Manager</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team1.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Mr. Heroas</h4>
                                                <span class="team-title">Head Of Markating</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team2.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Ms. Raka</h4>
                                                <span class="team-title">Admin</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team3.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Ms. Valona</h4>
                                                <span class="team-title">Manager</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team1.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Mr. Ebol</h4>
                                                <span class="team-title">Front/Back-End Programmer</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team2.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Ms. Gallano</h4>
                                                <span class="team-title">Admin</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 331.5px; margin-right: 30px;">
                                        <div class="team-single">
                                            <div class="team-img">
                                                <img src="{{asset('web/img/team/team3.png')}}" alt="img">
                                            </div>
                                            <div class="team-content">
                                                <h4 class="team-name font--bold">Mr. Las Marias</h4>
                                                <span class="team-title">Front-End Programmer</span>
                                                <ul class="team-social pos-absolute">
                                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                                        class="fas fa-chevron-left"></i></button><button type="button"
                                    role="presentation" class="owl-next"><i class="fas fa-chevron-right"></i></button>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="team-single text-center">
                        <div class="team-img">
                            <img src="{{asset('web/img/team/team1.png')}}" alt="img" class="img-fluid square-img">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name font--bold">Mr. Ebol</h4>
                            <span class="team-title">BackStab Programmer</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="https://www.facebook.com/chinoDarwinE/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/darwin-ebol-057a02240/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/dchinooo/"  target="_blank"  ><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-single text-center">
                        <div class="team-img">
                            <img src="{{asset('web/img/team/team2.png')}}" alt="img" class="img-fluid square-img">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name font--bold">Ms. Gallano</h4>
                            <span class="team-title">Head Of Marketing/Admin</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-single text-center">
                        <div class="team-img">
                            <img src="{{asset('web/img/team/team3.png')}}" alt="img" class="img-fluid square-img">
                        </div>
                        <div class="team-content">
                            <h4 class="team-name font--bold">Mr. Las Marias</h4>
                            <span class="team-title">Front-End Programmer</span>
                            <ul class="team-social pos-absolute">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Instagram Arae -->
        <section id="instagram_area_one" class="pt-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center_heading">
                            <h2>Follow Us Instagram</h2>
                            <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="instagram_post_slider owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-3993px, 0px, 0px); transition: all 1s ease 0s; width: 8712px;">
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post8.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post9.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post10.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post1.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post11.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post12.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post2.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post3.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post4.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post5.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post6.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post7.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post8.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post9.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post10.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post1.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post11.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post12.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post2.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post3.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post4.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post5.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post6.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 363px;">
                                        <div class="instgram_post">
                                            <a href="#!">
                                                <i class="fab fa-instagram"></i>
                                                <img src="{{asset('web/img/instagram/post7.png')}}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation"
                                    class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
                                    role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
