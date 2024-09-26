@extends('layouts.platform.app')
@section('title','Catgeorie')
@section('content')



<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="/categories">Categories </a></li>
                <li class="active"> {{$famille->libelle}} </li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Hero Section-->
<div class="hero-section hero-background pt-4">
    <h1 class="page-title">{{$famille->libelle}}</h1>
</div>
<!-- Begin Group Featured Product Area -->
<div class="group-featured-product pt-60 pb-40 pb-xs-25">
    <div class="container">
        <div class="row">
            <?php
            $count = 0;
            ?>
            <!-- Begin Featured Product Area -->
            @foreach ($sous_famille as $soFam)
            @if ($soFam->famille_id == $famille->id and $soFam->active == 1)
            <div class="col-lg-4">
                <div class="featured-product">
                    <div class="li-section-title">
                        <h2>
                            <span>{{$soFam->libelle}}</span>
                        </h2>
                    </div>
                    <div class="featured-product-active-2 owl-carousel">
                        <div class="featured-product-bundle">
                            @foreach ($Produits->where('sous_famille_id', $soFam->id)->take(2) as $item)
                            <div class="row">
                                <div class="group-featured-pro-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="{{asset('storage/'.$item->image)}}">
                                        </a>
                                    </div>
                                    <div class="featured-pro-content">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                @foreach($sous_famille as $souFam)
                                                @if($souFam->id == $item->sous_famille_id)
                                                <a href="/sub-categories/{{$soFam->id}}">{{$souFam->libelle}}</a>
                                                @endif
                                                @endforeach
                                            </h5>
                                        </div>
                                        <h4><a class="featured-product-name" href="/Products/{{$item->id}}">{{$item->designation}}</a></h4>
                                        <div class="featured-price-box">
                                            <span class="new-price">{{$item->prix_vente}} MAD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <!-- Featured Product Area End Here -->

        </div>
    </div>
</div>
<!-- Group Featured Product Area End Here -->
@endsection