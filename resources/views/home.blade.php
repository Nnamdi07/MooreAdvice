@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="form-group m-3">
            <form method="GET" action="create">
                <input value="Create Todo" class="btn btn-primary float-end" type="submit"/>
            </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
