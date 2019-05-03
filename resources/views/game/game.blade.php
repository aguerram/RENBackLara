@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/game/create" class="btn btn-success">Add new game</a>
        <br>
        <br>
        <div class="row">
            <table class="table table-striped col-12">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Cover</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><small>Edit</small></button>
                        <button type="button" class="btn btn-danger btn-sm"><small>Remove</small></button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
