@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center logged">
            <h3>
                You are logged in!
            </h3>
            <div class="data">
                <p> {{ Auth::user()->name }} </p>
                <p> {{ Auth::user()->date_of_birth->diffForHumans() }} </p>
                <p> {{ Auth::user()->email }} </p>
            </div>
        </div>
    </div>
</div>
@endsection
