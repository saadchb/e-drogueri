@extends('layouts.admin.app')
@section('title','Edit Product')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Product</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Products</a></div>
            <div class="breadcrumb-item">Edit Product</div>
        </div>
    </div>

    <div class="section-body">

        <h2 class="section-title">Edit Product : {{$produit->designation}}</h2>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">
                    <form class="mt-4" action="{{route('Produits.update',$produit->id)}}" method="Post" enctype="multipart/form-data">
                        @csrf                
                        @method('put')
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="designation"><strong>Name :</strong></label>
                                    <input type="text" value="{{$produit->designation}}" class="form-control" id="designation" placeholder="designation" name="designation">
                                    @error('designation')
                                    <div class="text-danger m-2">{{ $message }}</div><br>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="codebarre"><strong>Code Barre</strong></label>
                                    <input type="text"  value="{{$produit->codebarre}}"  name="codebarre" id="codebarre" class="form-control">
                                    @error('codebarre')
                                    <div class="text-danger m-2">{{ $message }}</div><br>
                                    @enderror
                                </div>
                            </div><br>

                            <div class="form-row">
                                <div class="col-md-2">
                                    <label for="prix_ht"><strong>Prix regular</strong></label>
                                    <input type="number" name="prix_ht" value="{{$produit->prix_ht}}" id="prix_ht" class="form-control" >
                                    @error('prix_ht')
                                    <div class="text-danger m-2">{{ $message }}</div><br>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label for="prix_vente"><strong> Prix de vente</strong></label>
                                    <input type="number" name="prix_vente" value="{{$produit->prix_vente}}" id="prix_vente" class="form-control"    >
                                    @error('prix_vente')
                                    <div class="text-danger m-2">{{ $message }}</div><br>
                                    @enderror
                                </div>


                                <div class="col-md-4">
                                    <label><strong>Sub-Categories </strong></label>
                                    <select class="form-control" name="sous_famille_id">
                                     @foreach($familles as $fam)
                                    <option value="{{$fam->id}}" {{ $fam->sous_famille_id == $produit->id ? 'selected' : '' }}>{{$fam ->libelle}}</option>
                                    @endforeach
                                    </select>
                                    @error('prix_ht')
                                    <div class="text-danger m-2">{{ $message }}</div><br>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label><strong> Unite</strong></label>
                                    <select class="form-control"  name="unite_id">
                                    @foreach($Unites as $fam)

                                    <option value="{{$fam->id}}"{{ $fam->unite_id == $produit->id ? 'selected' : '' }}>{{$fam ->unite}}</option>
                                    @endforeach
                                    </select>
                                    @error('prix_ht')
                                    <div class="text-danger m-2">{{ $message }}</div><br>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <label><strong> Brand</strong></label>
                                    <select class="form-control"  name="marque_id">
                                    @foreach($Marques as $fam)
                                    <option value="{{$fam->id}}" {{ $fam->marque_id == $produit->id ? 'selected' : '' }}>{{$fam ->marque}}</option>
                                    @endforeach
                                    </select>
                                    @error('prix_ht')
                                    <div class="text-danger m-2">{{ $message }}</div><br>
                                    @enderror
                                </div>

                            </div><br>


                            <div class="form-row">
                                <label> <strong>Image </strong></label>
                                <div class="custom-file">
                                    <input type="file" value="{{$produit->image}}" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">chose an image</label>
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row col">
                            <label for="description"><strong>description :</strong></label>
                            <textarea type="text" placeholder="description" class="form-control" id="description" name="description">{{$produit->description}}</textarea>
                            @error('description')
                            <div class="text-danger m-2">{{ $message }}</div><br>
                            @enderror
                            
                            <div class="custom-control custom-checkbox mt-3">
                                            <input type="checkbox" name="featured_product" value="{{$produit->featured_product}}" class="custom-control-input" id="featured_product" @if ($produit->featured_product == 1) checked @endif>
                                            <label class="custom-control-label" for="featured_product">Add this product to Featured Product in home page</label>
                                        </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="/Produits"class="btn btn-danger" >Back</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </div>
</section>


@endsection