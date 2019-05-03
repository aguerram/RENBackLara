@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="list-group">
                            <a href="/game" class="list-group-item list-group-item-action">Games</a>
                            <a href="/user" class="list-group-item list-group-item-action">Users <span
                                    class="badge badge-pill badge-primary">{{$t_users}}</span></a>
                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                               aria-disabled="true">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
