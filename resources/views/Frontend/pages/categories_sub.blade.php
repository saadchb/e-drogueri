@extends('layouts.platform.app')
@section('title','Sub-Catgeorie')
@section('content')

<!--Hero Section-->
<div class="hero-section hero-background">
    <h1 class="page-title">{{$famille->libelle}}</h1>
</div>

<!--Navigation section-->
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
            <li class="nav-item"><a href="#" class="permal-link">Catgeorie</a></li>
            <li class="nav-item"><span class="current-page">{{$famille->libelle}}</span></li>
        </ul>
    </nav>
</div>

<div class="page-contain category-page right-sidebar">
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="product-category grid-style">
                    <div id="top-functions-area" class="top-functions-area">
                        <div class="flt-item to-left group-on-mobile">
                            <span class="flt-title">Refine</span>
                            <a href="#" class="icon-for-mobile">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <div class="wrap-selectors">
                                <form action="#" name="frm-refine" method="get">
                                    <span class="title-for-mobile">Refine Products By</span>
                                    <div data-title="Price:" class="selector-item">
                                        <select name="price" class="selector">
                                            <option value="all">Price</option>
                                            <option value="class-1st">Less than 5$</option>
                                            <option value="class-2nd">$5-10$</option>
                                            <option value="class-3rd">$10-20$</option>
                                            <option value="class-4th">$20-45$</option>
                                            <option value="class-5th">$45-100$</option>
                                            <option value="class-6th">$100-150$</option>
                                            <option value="class-7th">More than 150$</option>
                                        </select>
                                    </div>
                                    <div data-title="Brand:" class="selector-item">
                                        <select name="brad" class="selector">
                                            <option value="all">Top brands</option>
                                            <option value="br2">Brand first</option>
                                            <option value="br3">Brand second</option>
                                            <option value="br4">Brand third</option>
                                            <option value="br5">Brand fourth</option>
                                            <option value="br6">Brand fiveth</option>
                                        </select>
                                    </div>
                                    <div data-title="Avalability:" class="selector-item">
                                        <select name="ability" class="selector">
                                            <option value="all">Availability</option>
                                            <option value="vl2">Availability 1</option>
                                            <option value="vl3">Availability 2</option>
                                            <option value="vl4">Availability 3</option>
                                            <option value="vl5">Availability 4</option>
                                            <option value="vl6">Availability 5</option>
                                        </select>
                                    </div>
                                    <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                                </form>
                            </div>
                        </div>
                        <div class="flt-item to-right">
                            <span class="flt-title">Sort</span>
                            <div class="wrap-selectors">
                                <div class="selector-item orderby-selector">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">popularity</option>
                                        <option value="rating">average rating</option>
                                        <option value="date">newness</option>
                                        <option value="price">price: low to high</option>
                                        <option value="price-desc">price: high to low</option>
                                    </select>
                                </div>
                                <div class="selector-item viewmode-selector">
                                    <a href="category-grid-right-sidebar.html" class="viewmode grid-mode active"><i class="biolife-icon icon-grid"></i></a>
                                    <a href="category-list-right-sidebar.html" class="viewmode detail-mode"><i class="biolife-icon icon-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="products-list">

                            @foreach ($Produits as $item)
                            @if ($item->sous_famille_id == $famille->id )
                            <li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="{{asset('storage/'. $item->image)}}" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">{{$famille->libelle}}</b>
                                        <h4 class="product-title"><a href="#" class="pr-name">{{$item->designation}}</a></h4>
                                        @if($item->prix_vente && $item->prix_ht)
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">dh</span>{{$item->prix_vente}} </span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">dh</span>{{$item->prix_ht}}</span></del>
                                        </div>
                                        @endif
                                        @if($item->prix_vente && !$item->prix_ht)
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">dh</span>{{$item->prix_vente}}</span></ins>
                                        </div>
                                        @endif

                                        <div class="slide-down-box">
                                            <p class="message">{{$item->description}}</p>
                                            <div class="buttons">
                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                   @if ($Produits->lastPage() > 1) 
                    <div class="biolife-panigations-block">
                        <ul class="panigation-contain">
                            @if ($Produits->previousPageUrl())
                            <li><a class="link-page next" href="{{ $Produits->previousPageUrl() }}"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                            @endif

                            @if ($Produits->currentPage() > 3)
                            <li><a class="link-page" href="{{ $Produits->url(1) }}">1</a></li>
                            @if ($Produits->currentPage() > 4)
                            <li><span class="sep">...</span></li>
                            @endif
                            @endif

                            @for ($i = max(1, $Produits->currentPage() - 2); $i <= min($Produits->lastPage(), $Produits->currentPage() + 2); $i++)
                                <li><a class=" @if ($i == $Produits->currentPage()) current-page @endif" href="{{ $Produits->url($i) }}">{{ $i }}</a></li>
                                @endfor

                                @if ($Produits->currentPage() < $Produits->lastPage() - 2)
                                    @if ($Produits->currentPage() < $Produits->lastPage() - 3)
                                        <li><span class="sep">...</span></li>
                                        @endif
                                        <li><a class="link-page " href="{{ $Produits->url($Produits->lastPage()) }}">{{ $Produits->lastPage() }}</a></li>
                                        @endif

                                        @if ($Produits->nextPageUrl())
                                        <li><a class="link-page next" href="{{ $Produits->nextPageUrl() }}"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                        @endif
                        </ul>
                    </div>
                    @endif

                </div>

            </div>

            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="biolife-mobile-panels">
                    <span class="biolife-current-panel-title">Sidebar</span>
                    <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                </div>
                <div class="sidebar-contain">
                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Departements</h4>
                        <div class="wgt-content">
                            <ul class="cat-list">
                                <ul class="products-list">
                                    @foreach ($familles as $fam)
                                    @if ($famille->famille_id == $fam->id)
                                    <li class="cat-list-item"><a href="#" class="cat-link">{{$fam ->libelle}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                    <div class="widget price-filter biolife-filter">
                        <h4 class="wgt-title">Price</h4>
                        <div class="wgt-content">
                            <div class="frm-contain">
                                <form action="#" name="price-filter" id="price-filter" method="get">
                                    <p class="f-item">
                                        <label for="pr-from">$</label>
                                        <input class="input-number" type="number" id="pr-from" value="" name="price-from">
                                    </p>
                                    <p class="f-item">
                                        <label for="pr-to">to $</label>
                                        <input class="input-number" type="number" id="pr-to" value="" name="price-from">
                                    </p>
                                    <p class="f-item"><button class="btn-submit" type="submit">go</button></p>
                                </form>
                            </div>
                            <ul class="check-list bold single">
                                <li class="check-list-item"><a href="#" class="check-link">$0 - $5</a></li>
                                <li class="check-list-item"><a href="#" class="check-link">$5 - $10</a></li>
                                <li class="check-list-item"><a href="#" class="check-link">$15 - $20</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Brand</h4>
                        <div class="wgt-content">
                            <ul class="check-list multiple">
                                <li class="check-list-item"><a href="#" class="check-link">Great Value Organic</a></li>
                                <li class="check-list-item"><a href="#" class="check-link">Plum Organic</a></li>
                                <li class="check-list-item"><a href="#" class="check-link">Shop to Home</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget biolife-filter">
                        <?php

                        use App\Models\Produit;

                        $latest = Produit::limit(4)->latest()->get();
                        ?>
                        <h4 class="wgt-title">Recently Added</h4>
                        <div class="wgt-content">
                            <ul class="products">
                                @foreach ($latest as $item)
                                @if ( $item->sous_famille_id == $famille->id )
                                <li class="pr-item">
                                    <div class="contain-product style-widget">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product" tabindex="0">
                                                <img src="{{asset('storage/'. $item->image)}}" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">{{$famille->libelle}}</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">{{$item->designation}}</a></h4>
                                            @if($item->prix_vente && $item->prix_ht)
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">dh</span>{{$item->prix_vente}} </span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">dh</span>{{$item->prix_ht}}</span></del>
                                            </div>
                                            @endif
                                            @if($item->prix_vente && !$item->prix_ht)
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">dh</span>{{$item->prix_vente}}</span></ins>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>


                </div>

            </aside>

        </div>
    </div>
</div>
@endsection