@extends('layouts.admin.app')
@section('title','Edit Brand')
@section('content')
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
                    <form action="{{route('marques.update',$marque->id)}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-header">
                            <h4>Edit Brand: {{$marque->marque}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" value="{{$marque->marque}}" name="marque" class="form-control">
                                @error('marque')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" name="image" value="$marque->image" class="form-control">
                                <br>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="active" value="{{$marque->active}}" class="custom-control-input" id="active" @if ($marque->active == 1) checked @endif>
                                    <label class="custom-control-label" for="active">Make this Sub-Categorie show up in homepage</label>
                                </div>
                                @error('image')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="/marques" class="btn btn-danger">Back</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
</section>

@endsection