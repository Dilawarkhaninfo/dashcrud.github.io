@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="card shadow bg-light">
            <div class="card-body">
            <h2 class="text-primary fw-bold text-center mb-3">Registration Here.....!</h2>
                <div class="row justify-content-center align-items-center">
                    <div class="col-6">
                        <div class="bg-primary text-white p-4 shadow rounded">
                            <h1>Dilawar Khan</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga suscipit cupiditate unde nemo ad praesentium magnam tenetur explicabo porro voluptates.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga suscipit cupiditate unde nemo ad praesentium magnam tenetur explicabo porro voluptates.</p>
                            <!-- <img src="{{ asset('images/hardware6.png') }}" class="img-fluid w-100 vh-100 rounded shadow" alt=""> -->
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- <h2 class="text-warning fw-bold text-center mb-3">Login Here.....!</h2> -->
                        <div class="card shadow">
                            <div class="card-body">
                                <div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
