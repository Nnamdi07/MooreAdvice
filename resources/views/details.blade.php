@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card text-center mt-5">
        <div class="card-header">
            <b>TODO DETAILS</b>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$todos->title}}</h5>
            <p class="card-text">{{$todos->description}}.</p>
            <a href="/edit/{{$todos->id}}"><span class="btn btn-primary">Edit</span></a>
            <a href="/delete/{{$todos->id}}"><span class="btn btn-danger">Delete</span></a>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection