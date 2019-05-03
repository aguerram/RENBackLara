@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Create new game</h2>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <form action="/game/" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Name of the game</small>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea type="text" class="form-control" name="description"></textarea>
                                <small id="helpId" class="form-text text-muted">Short description about the game</small>
                            </div>
                            <div class="form-group">
                                <label for="">Cover</label>
                                <input type="file" name="cover" accept="image/*" aria-describedby="helpCover" class="form-control">
                                <small id="helpCover" class="form-text text-muted">Short description about the game</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
