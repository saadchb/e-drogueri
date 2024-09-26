@extends('layouts.admin.app')
@section('title','Clients')
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
@if ($Clients->isEmpty())
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Empty Data</h4>
        </div>
        <div class="card-body">
            <div class="empty-state" data-height="400" style="height: 400px;">
                <div class="empty-state-icon" style="background-color: #e7391e;"><i class="fas fa-question"></i></div>
                <h2>We couldn't find any Clients</h2>
                <p class="lead">Sorry we can't find any Cliets, wait for new inscription.</p>
                <!--<a href="{{route('clients.create')}}" class="btn btn-primary btn-lg mt-4" style="background-color: #e7391e;border: none;font-size: large;">Create new One</a> -->
            </div>
        </div>
    </div>
</div>

@else
<div class="col-12 col-md-12 col-lg-12 mt-2">
    <div class="card">
        <div class="card-header">
            <h4> CLient list </h4>
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
                            <th>first name</th>
                            <th>last name</th>
                            <th>Email</th>
                            <!-- <th>Client status</th> -->
                            <th>tel</th>
                            <th>Adress</th>
                            <th>City</th>
                            <th>creatio time</th>
                            <th colspan="2">Action</th>
                        </tr>
                        @foreach ($Clients as $client)
                        @if($client ->isAdmin == 0)
                        <tr>
                            <td>{{$client->id}}</td>
                            <td> {{$client->prenom}}</td>
                            <td>{{$client->nom}}</td>
                            <td>{{$client->email}}</td>
                            <!-- 
                            @if($client->isAdmin == 0)
                            <td style="text-align: center;"><i class="fas fa-user-check"></i> active</td>
                            @else
                            <td style="text-align: center;"><i class="fas fa-user-times"></i> non active </td>
                            @endif -->

                            <td> {{$client->tel}} </td>
                            <td> {{$client->adresse}} </td>
                            <td> {{$client->ville}} </td>

                            <td> @if($client->created_at)
                                <p data-toggle="tooltip" title="" data-original-title="{{$client->created_at}}"> {{ $client->created_at->diffForHumans() }}</p>
                                @else
                                Unknown
                                @endif
                            </td>
                            <td>
                                <form id="delete-form-{{$client->id}}" action="#" method="Post">
                                    <!-- <a href="#" class="btn btn-success ">
                                        <i class="fa-solid fa-pen"></i>
                                    </a> -->
                                        <a href="#" class="btn btn-info ">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger " onclick='confirmation(event,`{{ $client->id }}`)' data-toggle="modal">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            @if ($Clients->lastPage() > 1)
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    @if ($Clients->previousPageUrl())
                    <li class="page-item "><a class="page-link" href="{{ $Clients->previousPageUrl() }}" tabindex="-1"><i class="fas fa-chevron-left"></i></a></li>
                    @endif

                    @for ($i = max(1, $Clients->currentPage() - 2); $i <= min($Clients->lastPage(), $Clients->currentPage() + 2); $i++)
                        <li class="page-item @if ($i == $Clients->currentPage()) active @endif"><a class="page-link">{{ $i }} <span class="sr-only"></span></a></li>

                        @endfor
                        @if ($Clients->nextPageUrl())
                        <li class="page-item"><a class="page-link" href="{{ $Clients->nextPageUrl() }}"><i class="fas fa-chevron-right"></i></a></li>
                        @endif
                </ul>
            </nav>
            @endif
        </div>
    </div>
</div>
@endif
@endsection