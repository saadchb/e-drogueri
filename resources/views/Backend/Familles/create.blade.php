@extends('layouts.admin.app')
@section('title','Ajouteé famille')
@section('content')

<!-- <div class="main-content" style="min-height: 434px;"> -->
<section class="section">
    <div class="section-header">
        <h1>Famille</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/familles">Famille</a></div>
            <div class="breadcrumb-item">Ajoutee Famile</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">
                    <form action="{{route('familles.store')}}" class="mt-4" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Add new Categorie</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                @if(!$errors->has('libelle'))
                                <label for="libelle">Name</label>
                                <input type="text" name="libelle" class="form-control">
                                @else
                                <label for="libelle" class="text-danger">Name of (Erreur)</label>
                                <input type="text" name="libelle" placeholder="Name" class="form-control is-invalid">
                                <div class="invalid-feedback">{{ $errors->first('libelle') }}</div>
                                @endif

                            </div>
                            <div class="form-group">
                                @if(!$errors->has('image'))
                                <label>img </label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input " id="customFile">
                                    <label class="custom-file-label" for="customFile">chose an image</label>
                                </div>
                                @else
                                <label class="text-danger">Img (error)</label>
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
                                    <label class="custom-control-label" for="active"> Make this categorie showup in homepage of siteweb</label>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save </button>
                            <a href="/familles" class="btn btn-danger">Back</a>
                    </form> 
                </div>
            </div>

        </div>
    </div>
</section>


@endsection