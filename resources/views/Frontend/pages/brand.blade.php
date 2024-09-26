@extends('layouts.platform.app')
@section('title','Sub-Catgeorie')
@section('content')




<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <!-- <li class="nav-item"><a href="#" class="permal-link">Catgeorie</a></li> -->
                <li class="nav-item"><span class="current-page">{{$brand->marque}}</span></li>            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
 
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-2 order-lg-1">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">
                    <a href="#">
                        <img src="Platform/assets/images/bg-banner/2.jpg" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a data-toggle="tab" class="active show" aria-selected="true" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing 1 to 9 of 15</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                                    <form action="{{ route('product_lis') }}" method="GET">
                                        <select name="orderby" class="nice-select orderby" aria-label="Shop order">
                                            <!-- <option value="Sort by" >Sort</option> -->
                                            <option value="menu_order" {{ request()->input('orderby') == 'menu_order' ? 'selected' : '' }}>Default sorting</option>
                                            <!-- <option value="popularity" {{ request()->input('orderby') == 'popularity' ? 'selected' : '' }}>Popularity</option> -->
                                            <option value="rating" {{ request()->input('orderby') == 'rating' ? 'selected' : '' }}>Average rating</option>
                                            <option value="date" {{ request()->input('orderby') == 'date' ? 'selected' : '' }}>Newness</option>
                                            <option value="price" {{ request()->input('orderby') == 'price' ? 'selected' : '' }}>Price: Low to High</option>
                                            <option value="price-desc" {{ request()->input('orderby') == 'price-desc' ? 'selected' : '' }}>Price: High to Low</option>
                                        </select>
                                        <button type="submit" class="btn  add-to-cart-btn ml-2 pb-2 pt-2" >Sort</button>
                                    </form>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    @foreach ($produits->where('marque_id',$brand->id) as $item)

                                    <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="/Products/{{$item->id}}">
                                                    <img src="{{asset('storage/'.$item->image)}}" alt="/Products/{{$item->designation}}">
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="list-view" class="tab-pane fade product-list-view  show" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    @foreach ($produits as $item)
                                    <div class="row product-layout-list">
                                        <div class="col-lg-3 col-md-5 ">
                                            <div class="product-image">
                                                <a href="/Products/{{$item->id}}">
                                                    <img src="{{asset('storage/'.$item->image)}}" alt="/Products/{{$item->designation}}">
                                                </a>
                                                @php
                                                $newThreshold = \Carbon\Carbon::now()->subDays(3);
                                                @endphp
                                                @if ($item->created_at > $newThreshold)
                                                <span class="sticker">New</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                      

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
                                                    <p>{{$item->description}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="shop-add-action mb-xs-30">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="#">Add to cart</a></li>
                                                    <li><a class="quick-view" data-toggle="modal" data-target="#{{$item->id}}" href="#"><i class="fa fa-eye"></i>Quick view</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing 1-12 of 13 item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        @if ($produits->previousPageUrl())

                                        <li><a href="{{ $produits->previousPageUrl() }}" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                        </li>
                                        @endif

                                        @for ($i = max(1, $produits->currentPage() - 2); $i <= min($produits->lastPage(), $produits->currentPage() + 2); $i++)
                                            <li class="@if ($i == $produits->currentPage()) active @endif"><a href="#">{{ $i }}</a></li>
                                            @endfor

                                            @if ($produits->nextPageUrl())
                                            <li>
                                                <a href="{{ $produits->nextPageUrl() }}" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                            </li>
                                            @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-1 order-lg-2">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="sidebar-title">
                        <h2>Filter By</h2>
                    </div>
                    <!-- btn-clear-all start -->
                    <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button>
                    <!-- btn-clear-all end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Brand</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul>
                                @foreach($marques as $brand)
                                    @if( $brand->active == 1)
                                    <li><input type="checkbox" name="product-categori"><a href="/Brand/{{$brand->id}}">{{$brand->marque}} ({{$brand->Produit_count}})</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Sub-Categories</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul>
                                    @foreach($Sub_fam as $souFam)
                                    @if( $souFam->active == 1)
                                    <li><input type="checkbox" name="product-categori"><a href="/sub-categories/{{$souFam->id}}">{{$souFam->libelle}} ({{$souFam->Produit_count}})</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                </div>
                <!--sidebar-categores-box end  -->
                <!-- category-sub-menu start -->
                <div class="sidebar-categores-box mb-sm-0">
                    <div class="sidebar-title">
                        <h2>Categories</h2>
                    </div>
                    <div class="category-tags">
                        <ul>
                            @foreach($familles as $Fam)
                            @if( $Fam->active == 1)
                            <li><a href="/categories/{{$Fam->id}}">{{$Fam->libelle}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- category-sub-menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
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
<script>
    // Attach event listener to the dropdown menu
    document.querySelector(".submitButton").addEventListener("change", function() {
        // Submit the form when an option is selected
        this.parentElement.submit();
    });
</script>
<!-- Content Wraper Area End Here -->
@endsection