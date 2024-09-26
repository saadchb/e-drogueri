@extends('Layouts.platform.app')
@section('title','Home')
@section('content')
<!-- Main content -->
<div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <!-- Begin Category Menu Area -->
            <div class="col-lg-3">
                <!--Category Menu Start-->
                <div class="category-menu category-menu-2">
                    <div class="category-heading">
                        <h2 class="categories-toggle"><span>categories</span></h2>
                    </div>
                    <div id="cate-toggle" class="category-menu-list">
                        <ul id="categories-list">
                            <style>
                                .hidden-category {
                                    display: none;
                                }
                            </style>
                            @foreach ($categories as $index => $categorie)
                            <li class="right-menu {{ $index >= 8 ? 'hidden-category' : '' }}">
                                <a href="shop-left-sidebar.html">{{$categorie->libelle}}</a>
                                <ul class="cat-mega-menu" style="width: 750px;">
                                    @foreach ($sub_categories as $S_categorie)
                                    @if($S_categorie->famille_id == $categorie->id)
                                    <li class="right-menu cat-mega-title">
                                        <a href="#">{{$S_categorie->libelle}}</a>
                                        <ul>
                                            @foreach ($produits as $item)
                                            @if($item->sous_famille_id == $S_categorie->id)
                                            <li><a href="#">{{$item->designation}}</a></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            <!-- <li class="rx-child"><a href="#">Mobile & Tablets</a></li>
    <li class="rx-child"><a href="#">Accessories</a></li> -->
                            <li class="rx-parent">
                                <a class="rx-default" id="show-more">More Categories</a>
                                <a class="rx-show" id="show-less" style="display: none;">Less Categories</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Category Menu End-->
            </div>
            <!-- Category Menu Area End Here -->
            <!-- Begin Slider Area -->
            <style>
                .bg-7,
                .bg-8,
                .bg-9 {
                    background-image: url(platform/assets/images/slider/7.jpg);
                    background-repeat: no-repeat;
                    background-position: center center;
                    background-size: cover;
                    min-height: 425px;
                    width: 100%;
                }

                .bg-8 {
                    background-image: url(platform/assets/images/slider/8.jpg);
                }

                .bg-9 {
                    background-image: url(platform/assets/images/slider/9.jpg);
                }
            </style>
            <div class="col-lg-9 col-md-10">
                <div class="slider-area slider-area-3 pt-sm-30 pt-xs-30 pb-xs-30">
                    <div class="slider-active owl-carousel">
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-01 bg-7">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                <h2>Chamcham Galaxy S9 | S9+</h2>
                                <h3>Starting at <span>$589.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="#">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-02 bg-8">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                <h2>Work Desk Surface Studio 2018</h2>
                                <h3>Starting at <span>$1599.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="#">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-01 bg-9">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                <h2>Phantom 4 Pro+ Obsidian</h2>
                                <h3>Starting at <span>$809.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="#">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here -->
            <!-- Begin Li Banner Area -->
            <!-- <div class="col-lg-3 col-md-4 text-center pt-sm-30">
                <div class="li-banner">
                    <a href="#">
                        <img src="{{asset('platform/assets/images/banner/3_1.jpg')}}" alt="">
                    </a>
                </div>
                <div class="li-banner mt-15 mt-sm-30 mt-xs-25 mb-xs-5">
                    <a href="#">
                        <img src="{{asset('platform/assets/images/banner/3_2.jpg')}}" alt="">
                    </a>
                </div>
            </div> -->
            <!-- Li Banner Area End Here -->
        </div>
    </div>
</div>
<!-- Slider With Category Menu Area End Here -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner pt-20 pt-sm-30">
    <div class="container">
        <div class="row">
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner pb-xs-30">
                    <a href="#">
                        <img src="{{asset('platform/assets/images/banner/1_3.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner pb-xs-30">
                    <a href="#">
                        <img src="{{asset('platform/assets/images/banner/1_4.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{asset('platform/assets/images/banner/1_5.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Static Banner Area End Here -->
<!-- Begin Featured products Area -->
<section class="product-area li-laptop-product Special-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Featured Products</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="special-product-active owl-carousel">
                        @foreach ($produits as $item)
                        @if ($item->featured_product == 1)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">

                                <div class="product-image">
                                    <a href="/Products/{{$item->id}}">
                                        <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                    </a>
                                    @php
                                    $newThreshold = \Carbon\Carbon::now()->subDays(3);
                                    @endphp
                                    @if ($item->created_at > $newThreshold)
                                    <span class="sticker">New</span>
                                    @endif
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                @foreach($sub_categories as $souFam)
                                                @if($souFam->id == $item->sous_famille_id)
                                                <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                @endif
                                                @endforeach
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                        @if($item->prix_vente && !$item->prix_ht)

                                        <div class="price-box">
                                            <span class="new-price">{{$item->prix_vente}} MAD</span>
                                        </div>
                                        @endif
                                        @if($item->prix_vente && $item->prix_ht)
                                        <div class="price-box">
                                            <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                            <span class="old-price">{{$item->prix_ht}} MAD</span>
                                        </div>
                                        @endif

                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#">Add to cart</a></li>
                                            <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endif
                        @endforeach
                    </div>

                </div>

            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>

@foreach ($produits as $item)
<!-- Begin Quick View | Modal Area -->
<div class="modal fade modal-wrapper" id="{{$item->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-1">
                                <div class="lg-image">
                                    <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}">
                                </div>
                            </div>
                            <div class="product-details-thumbs slider-thumbs-1">
                                <div class="sm-image"><img src="{{asset('storage/'.$item->image)}}" alt="{$item->designation}} image thumb"></div>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-6">
                        <div class="product-details-view-content pt-60">
                            <div class="product-info">
                                <h2>{{$item->designation}}</h2>
                                <span class="product-details-ref">Reference: {{$item->codebarre}}</span>
                                <!-- <div class="rating-box pt-20">
                                    <ul class="rating rating-with-review-item">
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        <li class="review-item"><a href="#">Read Review</a></li>
                                        <li class="review-item"><a href="#">Write Review</a></li>
                                    </ul>
                                </div> -->

                                <div class="price-box pt-20">
                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                </div>


                                <div class="product-desc">
                                    <p>
                                        <span>{{$item->description}}</span>
                                    </p>
                                </div>
                                <div class="product-variants">
                                    <div class="produt-variants-size">
                                        <label>Dimension</label>
                                        <select class="nice-select">
                                            <option value="1" title="S" selected="selected">40x60cm</option>
                                            <option value="2" title="M">60x90cm</option>
                                            <option value="3" title="L">80x120cm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="single-add-to-cart">
                                    <form action="#" class="cart-quantity">
                                        <div class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </div>
                                        <button class="add-to-cart" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="product-additional-info pt-25">
                                    <!-- <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a> -->
                                    <div class="product-social-sharing pt-25">
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Quick View | Modal Area -->
@endforeach
<!-- Featured products Area End Here -->


<!-- Begin Categori DROGUERIE Area -->
<section class="product-area li-trending-product pt-60 pb-45 pt-xs-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>DROGUERIE</span>
                    </h2>
                    <ul class="nav li-product-menu li-trending-product-menu">
                        <li><a class="active" data-toggle="tab" href="#home1"><span>All Products</span></a></li>
                        @foreach ($sub_categories as $s_items)
                        @if ($s_items->famille_id == 8 & $s_items->active == 1)
                        <li><a data-toggle="tab" href="#{{$s_items->libelle}}"><span>{{$s_items->libelle}}</span></a></li>
                        @endif

                        @endforeach
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="home1" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach ($sub_categories as $s_items)
                                @if($s_items->active == 1)
                                @foreach ($produits as $item)
                                @if ($s_items->famille_id == 8 && $item->sous_famille_id == $s_items->id)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach ($sub_categories as $s_items)
                    @if($s_items->active == 1)
                    @foreach ($produits as $item)
                    @if ($s_items->famille_id == 8 && $item->sous_famille_id == $s_items->id)
                    <div id="{{$s_items->libelle}}" class="tab-pane fade">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->


<!-- Begin LMarks  Area -->
<br>
<div class="col-lg-12">
    <!-- Begin Li's Tab Menu Content Area -->
    <div class="tab-content li-tab-content li-trending-product-content">
        <div id="#" class="tab-pane show fade in active">
            <div class="row">
                <div class="product-active owl-carousel">
                    @foreach ($sub_categories as $s_items)
                    @if($s_items->active == 1)
                    @foreach ($produits as $item)
                    @if ($s_items->famille_id == 8 && $item->sous_famille_id == $s_items->id)
                    @foreach ($marks as $mark)
                    @if($mark->active == 1 and $mark->id == $item->marque_id)
                    <div class="col-lg-12">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="/Brand/{{$mark->id}}">
                                    <img src="{{asset('storage/'.$mark->image)}}" alt="{{$item->marque}}" width="90px" height="140px">
                                </a>

                            </div>

                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Tab Menu Content Area End Here -->
</div>
<!-- MARKS Area End Here -->


<!-- Begin Categori Electricity Area -->
<section class="product-area li-trending-product pt-60 pb-45 pt-xs-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>ÉLECTRICITÉ</span>
                    </h2>
                    <ul class="nav li-product-menu li-trending-product-menu">
                        <li><a class="active" data-toggle="tab" href="#electricity"><span>All Products</span></a></li>
                        @foreach ($sub_categories as $s_items)
                        @if ($s_items->famille_id == 3 & $s_items->active == 1)
                        <li><a data-toggle="tab" href="#{{$s_items->libelle}}"><span>{{$s_items->libelle}}</span></a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="electricity" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach ($sub_categories as $s_items)
                                @if($s_items->active == 1)
                                @foreach ($produits as $item)
                                @if ($s_items->famille_id == 3 && $item->sous_famille_id == $s_items->id)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach ($sub_categories as $s_items)
                    @if($s_items->active == 1)
                    <div id="{{$s_items->libelle}}" class="tab-pane fade">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach ($produits as $item)
                                @if ($s_items->famille_id == 3 && $item->sous_famille_id == $s_items->id)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Categori Electricity Area End Here -->

<!-- Begin LMarks  Area -->
<br>
<div class="col-lg-12">
    <!-- Begin Li's Tab Menu Content Area -->
    <div class="tab-content li-tab-content li-trending-product-content">
        <div id="#" class="tab-pane show fade in active">
            <div class="row">
                <div class="product-active owl-carousel">
                    @foreach ($sub_categories as $s_items)
                    @if($s_items->active == 1)
                    @foreach ($produits as $item)
                    @if ($s_items->famille_id == 3 && $item->sous_famille_id == $s_items->id)
                    @foreach ($marks as $mark)
                    @if($mark->active == 1 and $mark->id == $item->marque_id)
                    <div class="col-lg-12">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="/Brand/{{$mark->id}}">
                                    <img src="{{asset('storage/'.$mark->image)}}" alt="{{$item->marque}}" width="90px" height="140px">
                                </a>

                            </div>

                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Tab Menu Content Area End Here -->
</div>
<!-- MARKS Area End Here -->

<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner li-static-banner-3 text-center">
    <div class="container">
        <div class="row">
            <!-- Begin Single Banner Area -->
            <div class="col-lg-6 col-md-6">
                <div class="single-banner pb-xs-30">
                    <a href="#">
                        <img src="{{asset('platform/assets/images/banner/2_3.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-6 col-md-6">
                <div class="single-banner">
                    <a href="#">
                        <img src="{{asset('platform/assets/images/banner/2_4.jpg')}}" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Static Banner Area End Here -->



<!-- Begin CATEGORIE ÉCLAIRAGE Area -->
<section class="product-area li-trending-product pt-60 pb-45 pt-xs-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>ÉCLAIRAGE</span>
                    </h2>
                    <ul class="nav li-product-menu li-trending-product-menu">
                        <li><a class="active" data-toggle="tab" href="#ECLAIRAGE"><span>All Products</span></a></li>
                        @foreach ($sub_categories as $s_items)
                        @if ($s_items->famille_id == 2 & $s_items->active == 1)
                        <li><a data-toggle="tab" href="#{{$s_items->libelle}}"><span>{{$s_items->libelle}}</span></a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="ECLAIRAGE" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach ($sub_categories as $s_items)
                                @if($s_items->active == 1)
                                @foreach ($produits as $item)
                                @if ($s_items->famille_id == 2 && $item->sous_famille_id == $s_items->id)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach ($sub_categories as $s_items)
                    @if($s_items->active == 1)
                    <div id="{{$s_items->libelle}}" class="tab-pane fade">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach ($produits as $item)
                                @if ($s_items->famille_id == 2 && $item->sous_famille_id == $s_items->id)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- CATEGORIE ÉCLAIRAGE Area End Here -->

<!-- Begin LMarks  Area -->
<br>
<div class="col-lg-12">
    <!-- Begin Li's Tab Menu Content Area -->
    <div class="tab-content li-tab-content li-trending-product-content">
        <div id="#" class="tab-pane show fade in active">
            <div class="row">
                <div class="product-active owl-carousel">
                    @foreach ($sub_categories as $s_items)
                    @if($s_items->active == 1)
                    @foreach ($produits as $item)
                    @if ($s_items->famille_id == 2 && $item->sous_famille_id == $s_items->id)
                    @foreach ($marks as $mark)
                    @if($mark->active == 1 and $mark->id == $item->marque_id)
                    <div class="col-lg-12">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="/Brand/{{$mark->id}}">
                                    <img src="{{asset('storage/'.$mark->image)}}" alt="{{$item->marque}}" width="90px" height="140px">
                                </a>

                            </div>

                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Tab Menu Content Area End Here -->
</div>
<br>
<!-- MARKS Area End Here -->

<!-- Begin CATEGORIE JARDINAGE Area -->
<section class="product-area li-trending-product pt-60 pb-45 pt-xs-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab">
                    <h2>
                        <span>JARDINAGE</span>
                    </h2>
                    <ul class="nav li-product-menu li-trending-product-menu">
                        <li><a class="active" data-toggle="tab" href="#jar"><span>All Products</span></a></li>
                        @foreach ($sub_categories as $s_items)
                        @if ($s_items->famille_id == 6 & $s_items->active == 1)
                        <li><a data-toggle="tab" href="#{{$s_items->id}}"><span>{{$s_items->libelle}}</span></a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content">
                    <div id="jar" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach ($sub_categories as $s_items)
                                @if($s_items->active == 1)
                                @foreach ($produits as $item)
                                @if ($s_items->famille_id == 6 && $item->sous_famille_id == $s_items->id)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub_categorie/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @foreach ($sub_categories as $s_items)
                    @if($s_items->active == 1)
                    <div id="{{$s_items->libelle}}" class="tab-pane fade">
                        <div class="row">
                            <div class="product-active owl-carousel">
                                @foreach ($produits as $item)
                                @if ($s_items->famille_id == 6 && $item->sous_famille_id == $s_items->id)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="/Products/{{$item->id}}">
                                                <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->designation}}" width="90px" height="140px">
                                            </a>
                                            @if ($item->created_at > $newThreshold)
                                            <span class="sticker">New</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        @foreach($sub_categories as $souFam)
                                                        @if($souFam->id == $item->sous_famille_id)
                                                        <a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}}</a>
                                                        @endif
                                                        @endforeach
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>

                                                @if($item->prix_vente && !$item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price">{{$item->prix_vente}} MAD</span>
                                                </div>
                                                @endif
                                                @if($item->prix_vente && $item->prix_ht)
                                                <div class="price-box">
                                                    <span class="new-price new-price-2">{{$item->prix_vente}} MAD</span>
                                                    <span class="old-price">{{$item->prix_ht}} MAD</span>
                                                </div>
                                                @endif

                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                    <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{$item->id}}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>
<!-- CATEGORIE JARDINAGE Area End Here -->

<script>
    document.getElementById('show-more').addEventListener('click', function() {
        const hiddenCategories = document.querySelectorAll('.hidden-category');
        hiddenCategories.forEach(function(category) {
            category.style.display = 'block';
        });
        document.getElementById('show-more').style.display = 'none';
        document.getElementById('show-less').style.display = 'inline';
    });

    document.getElementById('show-less').addEventListener('click', function() {
        const hiddenCategories = document.querySelectorAll('.hidden-category');
        hiddenCategories.forEach(function(category) {
            category.style.display = 'none';
        });
        document.getElementById('show-more').style.display = 'inline';
        document.getElementById('show-less').style.display = 'none';
    });
</script>
@endsection