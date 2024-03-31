<!-- Navbar Area -->
<div class="navbar-area">
    <div class="drodo-responsive-nav">
        <div class="container">
            <div class="drodo-responsive-menu mean-container">
                <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                        style="right:0;left:auto;"><span><span><span></span></span></span></a>
                    <nav class="mean-nav">
                        <ul class="navbar-nav" style="display: none;">
                            <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{route('products')}}" class="nav-link">Product</a></li>
                            <li class="nav-item"><a href="{{route('about-us')}}" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="others-option">
                            <div class="option-item">
                                <div class="wishlist-btn">
                                    <a onclick="viewCart()" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i
                                            class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                            class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="fas fa-search search-btn"></i>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('web/img/logo2.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="drodo-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('web/img/logo4.png')}}" alt="logo">
                </a>
                <div class="mean-push"></div>
                <div class="collapse navbar-collapse mean-menu" style="display: none;">
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li> --}}
                        <li class="nav-item"><a href="{{route('products')}}" class="nav-link">Products</a></li>
                        {{-- <li class="nav-item"><a href="{{route('order-tracking')}}" class="nav-link">Order Tracking</a></li> --}}
                        <li class="nav-item"><a href="{{route('about-us')}}" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Reviews</a></li>
                    </ul>
                    <div class="others-option">
                        <div class="option-item">
                            <div class="wishlist-btn">
                                <a onclick="viewWishlist()" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i
                                        class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="cart-btn">
                                <a onclick="viewCart()" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                        class="fas fa-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="fas fa-search search-btn"></i>
                            </div>
                        </div>
                        <div class="option-item">
                            <ul class="top-header-menu">
                                @if (Auth::check())
                                    <li><a href="{{route('user.my-account')}}">My Account</a></li>
                                    <li><a href="{{route('logout')}}" class=""><i class="fas fa-sign-out-alt"></i>logout</a></li>
                                @else
                                    <li><a href="{{route('login')}}">Login</a></li>
                                @endif                                 
                            </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>