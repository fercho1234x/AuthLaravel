@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 form-auth">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="date-of-birth" type="date" class="form-control @error('date-of-birth') is-invalid @enderror" name="date-of-birth" value="{{ old('date-of-birth') }}" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6 offset-md-3">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  placeholder="Password Confirm" autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-2 offset-md-5">
                        <button type="submit" class="btn btn-outline-primary btn-block btn-form">
                            {{ __('REGISTER') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
