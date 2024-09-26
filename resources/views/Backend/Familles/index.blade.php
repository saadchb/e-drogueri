@extends('layouts.admin.app')
@section('title','Famille')
@section('content')


@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if ($familles->isEmpty())
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Empty Data</h4>
        </div>
        <div class="card-body">
            <div class="empty-state" data-height="400" style="height: 400px;">
                <div class="empty-state-icon" style="background-color: goldenrod;"><i class="fas fa-question"></i></div>
                <h2>We couldn't find any "Categories"</h2>
                <p class="lead">Sorry we can't find any data, to get rid of this message, make at least 1 entry.</p>
                <a href="{{route('familles.create')}}" class="btn btn-primary btn-lg mt-4" style="background-color: goldenrod;border: none;font-size: large;">Create new One</a>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-12 col-md-12 col-lg-12 mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Categorie list</h4>
            <div class="card-header-action">
                <form name="form1">
                    <div class="input-group">
                        <input type="text" class="form-control" onchange="fom1.submit()" name="search1" id="search1" placeholder="Search">
                        <div class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md v_center">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Img</th>
                            <th>name</th>
                            <th>active</th>
                            <th>Products conting</th>
                            <th> creation time</th>
                            <th>Action</th>


                        </tr>
                        @foreach ($familles as $fam)
                        <tr>
                            <td>{{$fam->id}}</td>
                            <td>
                                <img src="{{asset('storage/'.$fam->image)}}" alt="" style="border-radius: 4px !important;" width="120px" height="70px">
                            </td>
                            <td>{{$fam->libelle}}</td>

                            @if($fam->active == 1)
                            <td style="text-align: center;"><i class="fas fa-eye"></i></td>
                            @else
                            <td style="text-align: center;"><i class="fas fa-eye-slash"></i></td>
                            @endif

                            <td>
                            {{$souFam->Produit_count}}
                            </td>

                            <td>
                                @if($fam->created_at)
                                <p data-toggle="tooltip" title="" data-original-title="{{$fam->created_at}}">
                                    {{ $fam->created_at->diffForHumans() }}
                                </p>
                                @else
                                Unknown
                                @endif
                            </td>



                            <td>
                                <form id="delete-form-{{$fam->id}}" action="{{route('familles.destroy', $fam->id)}}" method="Post">
                                    <a href="{{route('familles.edit', $fam->id)}}" class="btn btn-success">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick='confirmation(event,`{{ $fam->id }}`)' data-toggle="modal">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            @if ($familles->lastPage() > 1)
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    @if ($familles->previousPageUrl())
                    <li class="page-item "><a class="page-link" href="{{ $familles->previousPageUrl() }}" tabindex="-1"><i class="fas fa-chevron-left"></i></a></li>
                    @endif

                    @for ($i = max(1, $familles->currentPage() - 2); $i <= min($familles->lastPage(), $familles->currentPage() + 2); $i++)
                        <li class="page-item @if ($i == $familles->currentPage()) active @endif"><a class="page-link">{{ $i }} <span class="sr-only"></span></a></li>

                        @endfor
                        @if ($familles->nextPageUrl())
                        <li class="page-item"><a class="page-link" href="{{ $familles->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a></li>
                        @endif
                </ul>
            </nav>
            @endif
        </div>
    </div>
</div>
@endif
@endsection