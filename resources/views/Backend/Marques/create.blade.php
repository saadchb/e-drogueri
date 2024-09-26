@extends('layouts.admin.app')
@section('title','Add Brand')
@section('content')

<!-- <div class="main-content" style="min-height: 434px;"> -->
<section class="section">
    <div class="section-header">
        <h1>Brand</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/familles">Brand</a></div>
            <div class="breadcrumb-item">Add new Brand</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">
                    <form action="{{route('marques.store')}}" class="mt-4" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Add New Brand</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name </label>
                                <input type="text" name="marque" class="form-control">
                                @error('marque')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                @if(!$errors->has('image'))
                                <label>Logo </label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input " id="customFile">
                                    <label class="custom-file-label" for="customFile">choisir une image</label>
                                </div>
                                @else
                                <label class="text-danger">logo (error)</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input is-invalid" id="customFile">
                                    <label class="custom-file-label" for="customFile">chose an image</label>
                                </div><br>
                                @endif
                                @error('image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <br><br>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="active" class="custom-control-input" id="active" {{ old('active') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="active">Make this Sub-Categorie show up in homepage</label>
                                </div>
                            </div>
                        </div>


                        <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Create this brand</button>
                        <a href="/marques"class="btn btn-danger" >Back</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection