<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version One || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-stars.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Modernizr js -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Top Left Area -->
                        <div class="col-lg-3 col-md-4">
                            <div class="header-top-left">
                                <ul class="phone-wrap">
                                    <li><span>Telephone Enquiry:</span><a href="#">(+84) 938 976 425</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Left Area End Here -->
                        <!-- Begin Header Top Right Area -->
                        <div class="col-lg-9 col-md-8">
                            <div class="header-top-right">
                                <ul class="ht-menu">
                                    <!-- Begin Setting Area -->
                                    @auth
                                    <li><form method="post" action="/logout"> @csrf <a href="#" onclick="document.forms[0].submit();">Logout</a></form></li>
                                    @endauth
                 

                                    <!-- Setting Area End Here -->
                                    <!-- Begin Currency Area -->
                                    <li>
                                        <span class="currency-selector-wrapper">Currency :</span>
                                        <div class=""><span>VND</span></div>
                                    </li>
                                    <!-- Currency Area End Here -->
                                    <!-- Begin Language Area -->
                                    <li>
                                        <span class="language-selector-wrapper">Language :</span>
                                        <div class=""><span>English</span></div>
                  
                                    </li>
                                    <!-- Language Area End Here -->
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Begin Header Middle Area -->
            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Logo Area -->
                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30">
                                <a href="/">
                                    <img src="{{ asset('images/menu/logo/1.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Header Logo Area End Here -->
                        <!-- Begin Header Middle Right Area -->
                        <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                            <!-- Begin Header Middle Searchbox Area -->






                            <form action="{{ route('shop') }}" method="GET" class="hm-searchbox">
                                @csrf
                                {{-- <select class="nice-select select-search-category">
                                    <option value="0">All</option>
                                  
                                </select> --}}
                                <input type="text" name="query" placeholder="Enter your search key ...">
                                <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>a
                            </form>










                            <!-- Header Middle Searchbox Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="header-middle-right">
                                <ul class="hm-menu">
                                    <!-- Begin Header Middle Wishlist Area -->
                                    
                                    <!-- Header Middle Wishlist Area End Here -->
                                    <!-- Begin Header Mini Cart Area -->
                                    <li class="hm-minicart">
                                        <div class="hm-minicart-trigger">
                                            <span class="item-icon"></span>
                                            @php $total = 0;
                                                $count = 0;
                                             @endphp
                                            @foreach ((array) session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity']; $count++; @endphp
                                            @endforeach
                                            <span class="item-text">{{number_format($total)}} VND
                                         
                                                <span class="cart-item-count">{{$count}}</span>
                                           
                                             
                                            </span>
                                        </div>
                                        <span></span>
                                        <div class="minicart">
                                            @if(session('cart'))
                                            @foreach (session('cart') as $id => $item)
                                            <ul class="minicart-product-list">
                                                <li>
                                                    <a href="/product/{{ $item['id'] }}" class="minicart-product-image">
                                                        <img src="{{ asset($item['image']) }}"
                                                            alt="cart products">
                                                    </a>
                                                    <div class="minicart-product-details">
                                                        <h6><a href="/product/{{ $item['id'] }}">{{ $item['product_name'] }}</a></h6>
                                                        <span>£40 x 1</span>
                                                    </div>
                                                    <button class="close" title="Remove">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            @endforeach
                                            @endif
                                            <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                                            <div class="minicart-button">
                                                <a href="shopping-cart.html"
                                                    class="li-button li-button-fullwidth li-button-dark">
                                                    <span>View Full Cart</span>
                                                </a>
                                                <a href="checkout.html" class="li-button li-button-fullwidth">
                                                    <span>Checkout</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- Header Mini Cart Area End Here -->
                                </ul>
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                        <!-- Header Middle Right Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Header Middle Area End Here -->
            <!-- Begin Header Bottom Area -->
            <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Header Bottom Menu Area -->
                            <div class="hb-menu">
                                <nav>
                                    <ul>
                                        <li class="dropdown-holder"><a href="/">Home</a>
                                        </li>
                                        <li class="megamenu-holder"><a href="/shop">Shop</a>

                                        </li>
                                        <li class="dropdown-holder"><a
                                                href="{{ route('shop', ['product_type' => 'CPU']) }}">CPU</a>

                                        </li>
                                        <li class="megamenu-static-holder"><a
                                                href="{{ route('shop', ['product_type' => 'GPU']) }}">Graphic
                                                Cards</a>

                                        </li>

                                        <li class="megamenu-static-holder"><a
                                                href="{{ route('shop', ['product_type' => 'LAPTOP']) }}">Laptops</a>
                                        </li>
                                        <li class="megamenu-static-holder"><a
                                                href="{{ route('shop', ['product_type' => 'GPU,MICE']) }}">Peripherals</a>

                                        </li>

                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>

                                        @auth
                      
                                        <li><a href="/register">Welcome {{auth()->user()->name}}</a></li>
                                        <li><a href="/god">Admin Page</a></li>
                             
                                        @else
                                        <li><a href="/register">Login</a></li>
                                        @endauth



                                    </ul>
                                </nav>
                            </div>
                            <!-- Header Bottom Menu Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom Area End Here -->
            <!-- Begin Mobile Menu Area -->
            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </header>
