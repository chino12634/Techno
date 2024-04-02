@extends('web.layouts.default')

@section('title', 'Services')

@section('content')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area -->
    <section id="contact_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_info">
                        <h2>Introducing the future of school merchandising: DAK Style Apparel!</h2>
                        <br>
                        <br>
                        <br>
                        <p>Say goodbye to the old-school hassle of ordering school gear and hello to a seamless online experience. 
                            Imagine effortlessly customizing your own Polo Shirt, Shirt, Lanyard, or Hoodie with just a few clicks. 
                            Whether you prefer Sublimation, Cotton, or Lacoste fabric for your shirts, or Matte and Glossy finishes for your lanyards, 
                            we've got you covered. And for those cozy hoodie lovers, our thick cloth option will keep you warm in style.
                        <br>
                        <br>
                        <br>
                            But wait, there's more! With our convenient online transaction system, simply send us your design and let us handle the rest. 
                            No more waiting in line or dealing with complicated order forms. Plus, we offer hassle-free delivery and even meet-up 
                            options within the city, making it easier than ever to get your hands on your personalized merch.
                        <br>
                        <br>
                        <br>    
                            But that's not all - DAK Style Apparel is gearing up for nationwide domination! That's right, 
                            we're setting our sights on expanding our shipping services across the Philippines, so no matter where you are, 
                            you can enjoy our top-notch products and stellar service. Get ready to revolutionize your school spirit with DAK Style Apparel!
                        </p>

                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-4">
                    <div class="left_side_contact">
                        <ul>
                            <li class="address_location">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>32, Choto Mirzapur, Ahsan Ahmed Road Khulna 9100, Bangladesh</p>
                            </li>
                            <li class="address_location">
                                <i class="fas fa-phone-volume"></i>
                                <div class="contact_widget">
                                    <a href="#!">+84 (898) 759-325</a>
                                    <a href="#!">+84 (344) 406-561</a>
                                </div>
                            </li>
                            <li class="address_location">
                                <i class="far fa-envelope"></i>
                                <div class="contact_widget">
                                    <a href="mailto:phamhunggl721@gmail.com">phamhunggl721@gmail.com</a>
                                    <a href="mailto:phamhunggl721@gmail.com">phamhunggl721@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-8">
                    <div class="contact_form_one">
                        <h3>Get In Touch</h3>
                        <div action="#!">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject*">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea rows="7" class="form-control" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="submit_bitton_contact_one">
                                        <button class="theme-btn-one btn-black-overlay btn_md">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-12">
                    <div class="map_area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.807548266042!2d122.05879767584094!3d6.913599518505434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x325041dd7a24816f%3A0x51af215fb64cc81a!2sWestern%20Mindanao%20State%20University!5e0!3m2!1sen!2sph!4v1711164394331!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
