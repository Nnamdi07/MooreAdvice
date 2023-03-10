@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item"><a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="form-group m-3">
            <form method="GET" action="create">
                <input value="Create Todo" class="btn btn-primary float-end" type="submit"/>
            </form>
            </div>
    </div>
        </div>
    </div>
</div>
@endsection
