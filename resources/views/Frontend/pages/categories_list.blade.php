@extends('layouts.platform.app')
@section('title','Catgeorie')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="/"> <i class="fa fa-home mr-2"></i>Home</a></li>
                <li class="active">Categories</li>
            </ul>
        </div>
    </div>
</div>
<?php

use App\Models\Famille;

$famm = Famille::all(); ?>




<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Content Wraper Area -->
<div class="content-wraper pt-20 pb-60">
    <div class="container">
        <h3>Categories</h3>
        <div class="row">
            <div class="overflow-auto mb-3 mt-2" style="max-width: 1200px; white-space: nowrap; overflow-x: auto;">
                @foreach ($famm as $fam)
                <a href="/categories/{{$fam}}" class="btn btn-outline-warning mb-3 ml-2" style="border-radius: 20px;color: black; border-color: black;"><span style="display: inline-block;text-align: center ;border-color: #F3F5F9; margin-right: 20px;">{{ $fam->libelle }}</span></a>
                @endforeach

            </div>
            <div class="col-lg-12">

                <!-- shop-products-wrapper start -->
                @foreach ($familles as $fam)

                <h4><span style="border-bottom: solid 2px yellow ;">{{$fam->libelle}} <a href="/categories/{{$fam->id}}"><i class="fa fa-chevron-circle-right ml-2"></i></a></span></h4>
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                                    <?php $count = 0; ?>
                                    @foreach ($sous_familles as $sous_fam)
                                    @if ($sous_fam->famille_id == $fam->id )
                                    @if ($count < 4)
                                        <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                        <!-- single-product-wrap start -->
                                        <div class="card ">
                                            <div class="card-header " style="padding: 4px; display: flex; justify-content: center; align-sous: center; ">
                                                <img src="{{asset('storage/'.$sous_fam->image)}}" style="height: 10rem ; width: 13rem;border-radius: 2px;" class="article-image img-fluid ">
                                                @php
                                                $newThreshold = \Carbon\Carbon::now()->subDays(3);
                                                @endphp
                                                @if ($sous_fam->created_at > $newThreshold)
                                                <span class="course-label" style="position: absolute;left: 10px;top: 10px;background: gold;padding: 10px 7px;border-radius: 50px;font-weight: 700;color: #385777;border: 1px solid #F3F5F9;">
                                                    <span class="sticker">New</span>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="card-body ">
                                                <a href="/sub-categories/{{$sous_fam->id}}" style="color: black;"  class="card-title">
                                                    <b>{{$sous_fam->libelle}} </b>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                </div>
                                @php
                                $count++; @endphp
                                @else
                                @break
                                @endif
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <center><a href="/categories/{{$fam->id}}" class="btn btn-outline-info btn-icon icon-left pl-4 pr-4 mt-4 mb-4 ">All {{$fam->libelle}} <i class="fa fa-angle-right ml-2"></i></a></center>

                    <!-- <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing 1-12 of 13 sous$sous_fam(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
            <!-- shop-products-wrapper end -->
            @endforeach
        </div>
    </div>
</div>
</div>
<!-- Content Wraper Area End Here -->
@endsection