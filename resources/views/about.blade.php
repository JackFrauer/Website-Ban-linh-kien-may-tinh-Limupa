<x-header-card/>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- about wrapper start -->
            <div class="about-us-wrapper pt-60 pb-40">
                <div class="container">
                    <div class="row">
                        <!-- About Text Start -->
                        <div class="col-lg-6 order-last order-lg-first">
                            <div class="about-text-wrap">
                                <h2><span>Provide Best</span>Product For You</h2>
                                <p>We provide the best Beard oile all over the world. We are the worldd best store in indi for Beard Oil. You can buy our product without any hegitation because they truste us and buy our product without any hagitation because they belive and always happy buy our product.</p>
                                <p>Some of our customer say’s that they trust us and buy our product without any hagitation because they belive us and always happy to buy our product.</p>
                                <p>We provide the beshat they trusted us and buy our product without any hagitation because they belive us and always happy to buy.</p>
                            </div>
                        </div>
                        <!-- About Text End -->
                        <!-- About Image Start -->
                        <div class="col-lg-5 col-md-10">
                            <div class="about-image-wrap">
                                <img class="img-full" src="images/product/large-size/13.jpg" alt="About Us" />
                            </div>
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
            <!-- about wrapper end -->
            <!-- Begin Counterup Area -->
            <div class="counterup-area">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin Limupa Counter Area -->
                            <div class="limupa-counter white-smoke-bg">
                                <div class="container">
                                    <div class="counter-img">
                                        <img src="images/about-us/icon/1.png" alt="">
                                    </div>
                                    <div class="counter-info">
                                        <div class="counter-number">
                                            <h3 class="counter">
                                                @php
                                                $count=0
                                                @endphp
                                                @foreach($users as $item)
                                                 @php $count++; @endphp
                                                @endforeach
                                                
                                                {{$count}}
                                            </h3>
                                        </div>
                                        <div class="counter-text">
                                            <span>HAPPY CUSTOMERS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin limupa Counter Area -->
                            <div class="limupa-counter gray-bg">
                                <div class="counter-img">
                                    <img src="images/about-us/icon/2.png" alt="">
                                </div>
                                <div class="counter-info">
                                    <div class="counter-number">
                                        <h3 class="counter">   @php
                                            $count_order=0
                                            @endphp
                                            @foreach($orders as $item)
                                             @php $count_order++; @endphp
                                            @endforeach
                                            
                                            {{$count_order}}</h3>
                                    </div>
                                    <div class="counter-text">
                                        <span>ORDERS FINISHED</span>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin limupa Counter Area -->
                            <div class="limupa-counter white-smoke-bg">
                                <div class="counter-img">
                                    <img src="images/about-us/icon/3.png" alt="">
                                </div>
                                <div class="counter-info">
                                    <div class="counter-number">
                                        <h3 class="counter">   @php
                                            $count_product=0
                                            @endphp
                                            @foreach($products as $item)
                                             @php $count_product++; @endphp
                                            @endforeach
                                            
                                            {{$count_product}}</h3>
                                    </div>
                                    <div class="counter-text">
                                        <span>PRODUCTS</span>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Begin limupa Counter Area -->
                            <div class="limupa-counter gray-bg">
                                <div class="counter-img">
                                    <img src="images/about-us/icon/4.png" alt="">
                                </div>
                                <div class="counter-info">
                                    <div class="counter-number">
                                        <h3 class="counter">   @php
                                            $count_manu=0
                                            @endphp
                                            @foreach($types as $item)
                                             @php $count_manu++; @endphp
                                            @endforeach
                                            
                                            {{$count_manu}}</h3>
                                    </div>
                                    <div class="counter-text">
                                        <span>COOPERATED BRANDS</span>
                                    </div>
                                </div>
                            </div>
                            <!-- limupa Counter Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counterup Area End Here -->
            <!-- team area wrapper start -->
            <div class="team-area pt-60 pt-sm-44">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="li-section-title capitalize mb-25">
                                <h2><span>our team</span></h2>
                            </div>
                        </div>
                    </div> <!-- section title end -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team-member mb-60 mb-sm-30 mb-xs-30">
                                <div class="team-thumb">
                                    <img src="{{asset('css/images/harold.jpg')}}" alt="Our Team Member">
                                </div>
                                <div class="team-content text-center">
                                    <h3>András István Arató</h3>
                                    <p>IT Expert</p>
                                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">info@example.com</a>
                                    <div class="team-social">
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end single team member -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team-member mb-60 mb-sm-30 mb-xs-30">
                                <div class="team-thumb">
                                    <img src="{{asset('css/images/harold.jpg')}}"alt="Our Team Member">
                                </div>
                                <div class="team-content text-center">
                                    <h3>András István Arató</h3>
                                    <p>Web Designer</p>
                                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">info@example.com</a>
                                    <div class="team-social">
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end single team member -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team-member mb-30 mb-sm-60">
                                <div class="team-thumb">
                                    <img src="{{asset('css/images/harold.jpg')}}" alt="Our Team Member">
                                </div>
                                <div class="team-content text-center">
                                    <h3>András István Arató</h3>
                                    <p>Web Developer</p>
                                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">info@example.com</a>
                                    <div class="team-social">
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end single team member -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="team-member mb-30 mb-sm-60 mb-xs-60">
                                <div class="team-thumb">
                                    <img src="{{asset('css/images/harold.jpg')}}" alt="Our Team Member">
                                </div>
                                <div class="team-content text-center">
                                    <h3>András István Arató</h3>
                                    <p>Marketing officer</p>
                                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">info@example.com</a>
                                    <div class="team-social">
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-facebook"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end single team member -->
                    </div>
                </div>
            </div>
            <!-- team area wrapper end -->
            <!-- Begin Footer Area -->
    <x-footer-card/>