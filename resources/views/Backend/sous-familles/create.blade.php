@extends('layouts.admin.app')
@section('title','Ajouteé sous-famille')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Sous-Famille</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/sous-famille">Sous-Famille</a></div>
            <div class="breadcrumb-item">Ajoutee Famile</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">
                    <form action="{{route('sous-famille.store')}}" class="mt-4" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Ajoutee nouvelle sous-famille</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nom de Famille </label>
                                <input type="text" name="libelle" class="form-control">
                                @error('libelle')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                  
                            <div class="form-group">
                                <label>Select2</label>
                                <select class="form-control select2" style="width: 100%;" name="famille_id">
                                    @foreach($familles as $fam)
                                    <option value="{{$fam->id}}">{{$fam ->libelle}}</option>
                                    @endforeach
                                </select>
                            </div>
              
                            <label for="">Image</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">choisir une image</label>
                                
                            </div>@error('image')
                                <div class="alert alert-danger mt-1 mb-1">
                                    {{$message}}
                                </div>
                                @enderror<br><br>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="active" class="custom-control-input" id="active"  {{ old('active') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="active">Afficher sous-famille dans la page d'accueil</label>
                                    </div>
                        </div>
                        <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Creé Sous-famille</button>
                        <a href="/sous-famille"class="btn btn-danger" >annuler</a>
                </div>
                </form>
            </div>
        </div>

    </div>
    </div>
</section>
@endsection