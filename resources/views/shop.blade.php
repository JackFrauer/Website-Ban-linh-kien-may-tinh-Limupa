
<!-- Header Area End Here -->
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop 3 Column</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">

                    <a href="/">
                        <img src="{{ asset('images/banner-big.jpg') }}" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                        data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i
                                            class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view"
                                        href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>






                        {{$products->links('vendor.pagination.custom-count')}}
                    </div>
                    <!-- product-select-box start -->
                    
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    @foreach ($products->take(9) as $item)
                                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="/product/{{ $item->id }}">
                                                        <img src="{{ asset($item->image) }}" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a
                                                                    href="product-details.html">{{ $item->product_type }}</a>
                                                            </h5>
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4><a class="product_name"
                                                                href="/product/{{ $item->id }}">{{ $item->product_name }}</a>
                                                        </h4>
                                                        <div class="price-box">
                                                            <span
                                                                class="new-price">{{ number_format($item->price) }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="shopping-cart.html">Add
                                                                    to cart</a></li>
                                                            <li><a href="/product/{{$item->id}}" title="quick view"
                                                                    class="quick-view-btn" data-toggle="modal"
                                                                    data-target="#exampleModalCenter"><i
                                                                        class="fa fa-eye"></i></a></li>
                                                            <li><a class="links-details" href="wishlist.html"><i
                                                                        class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    @foreach ($products->take(9) as $item)
                                        <div class="row product-layout-list{{ $loop->last ? ' last-child' : '' }}">
                                            <div class="col-lg-3 col-md-5 ">
                                                <div class="product-image">
                                                    <a href="/product/{{ $item->id }}">
                                                        <img src="{{ asset($item->image) }}" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-7">
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                <a
                                                                    href="/product/{{ $item->id }}">{{ $item->product_type }}</a>
                                                            </h5>
                                                            <div class="rating-box">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h4><a class="product_name"
                                                                href="single-product.html">{{ $item->product_name }}</a>
                                                        </h4>
                                                        <div class="price-box">
                                                            <span
                                                                class="new-price">{{ number_format($item->price) }}</span>
                                                        </div>
                                                        <p>{{ $item->product_details }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="shop-add-action mb-xs-30">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart"><a href="#">Add to cart</a></li>
                                                        <li class="wishlist"><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                        <li><a class="quick-view" data-toggle="modal"
                                                                data-target="#exampleModalCenter" href="/product/{{$item->id}}"><i
                                                                    class="fa fa-eye"></i>Quick view</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{ $products->links('vendor.pagination.custom') }}
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- Content Wraper Area End Here -->
<x-footer-card />
