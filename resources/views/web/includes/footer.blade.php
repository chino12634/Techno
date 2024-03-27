<!-- Footer Area -->
<footer id="footer_one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="footer_left_side">
                    <a href="#!"><img src="{{asset('web/img/logo4.png')}}" alt="logo"></a>
                    <p>We are a team that engaged in the field of shirt products within the WMSU COE and serve 
                        the best service for your apparel and give you the best quality of shirts!.</p>
                    <div class="footer_left_side_icon">
                        <ul>
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="footer_one_widget">
                    <h3>INFORMATION</h3>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li> <a href="{{route('about-us')}}">About Us</a></li>
                        {{-- <li><a href="#">Privacy Policy</a></li>--}}
                        {{-- <li><a href="#">Frequently Questions</a></li>  --}}
                        {{-- <li><a href="{{route('order-tracking')}}">Order Tracking</a></li> --}}
                        {{-- <li><a href="#">Compare</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="footer_one_widget">
                    <h3>Account</h3>
                    <ul>
                        <li><a href="{{route('user.my-account')}}">My Account</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                        <li><a href="{{route('forgot-password')}}">Forgot Password</a></li>
                        <li><a href="{{route('user.my-cart')}}">Cart</a></li>
                        <li><a href="{{route('user.my-wishlist')}}">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="footer_one_widget">
                    <h3>NEWSLETTER</h3>
                    <div id="mc_embed_signup" class="subscribe-form">
                        <div>
                            <div class="mc-form">
                                <input class="form-control" type="email" required="" placeholder="Your Mail*"
                                    name="EMAIL" value="">
                                <div class="clear">
                                    <button class="theme-btn-one btn_md" type="submit" name="subscribe" value=""><i
                                            class="icon-cursor"></i> Send Mail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>