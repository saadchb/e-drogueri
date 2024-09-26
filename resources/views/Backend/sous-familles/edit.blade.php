@extends('layouts.admin.app')
@section('title','Edit Sub-Categorie')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Sub-Categorie</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/sous-famille">Sub-Categorie</a></div>
            <div class="breadcrumb-item">Edit Sub-Categorie</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">
                    <form action="{{route('sous-famille.update',$sous_famille->id)}}" class="mt-4" method="Post" enctype="multipart/form-data">
                        @method('put ')
                        @csrf
                        <div class="card-header">
                            <h4>Edit {{$sous_famille->libelle}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name of Sub-Categorie </label>
                                <input type="text" value="{{$sous_famille->libelle}}" name="libelle" class="form-control">
                                @error('libelle')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Select2</label>
                                <select class="form-control select2" style="width: 100%;" name="famille_id">
                                    @foreach($familles as $famille)
                                    <option value="{{ $famille->id }}" {{ $sous_famille->famille_id == $famille->id ? 'selected' : '' }}>
                                        {{ $famille->libelle }}
                                    </option>
                                    @endforeach
                                </select>
                                </select>
                            </div>

                        
                            <div class="form-group">
                                <label>image</label>
                                <input type="file" name="image" value="$sous_famille->image" class="form-control">
                           <br>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="active" value="{{$sous_famille->active}}" class="custom-control-input" id="active" @if ($sous_famille->active == 1) checked @endif>
                                        <label class="custom-control-label" for="active">Make this Sub-Categorie show up in homepage</label>
                                    </div>
                            @error('image')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror </div>
                        </div>
                        <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                            <a href="/sous-famille"class="btn btn-danger" >Back</a>                        </div>
                </div>
                </form>
            </div>
        </div>

    </div>
    </div>
</section>
@endsection